<?php
require_once 'includes/config.php';

session_start();

// Функция для серверной валидации
function validateInput($data) {
    $errors = [];
    
    // Валидация логина
    if (strlen($data['login']) < 6) {
        $errors['login'] = 'Логин должен содержать не менее 6 символов';
    }
    if (!preg_match('/^[а-яёa-z0-9]+$/iu', $data['login'])) {
        $errors['login'] = 'Логин может содержать только русские, английские буквы и цифры';
    }
    if (preg_match('/(.)\1{2,}/', $data['login'])) {
        $errors['login'] = 'Логин не может содержать 3 одинаковых символа подряд';
    }
    
    // Валидация email
    $emailParts = explode('@', $data['email']);
    if (strlen($emailParts[0]) < 2) {
        $errors['email'] = 'Имя почты должно содержать не менее 2 символов';
    }
    if (substr($data['email'], -3) === '.io') {
        $errors['email'] = 'Использование домена .io запрещено';
    }
    
    // Валидация пароля
    $passwordParts = explode('-', $data['password']);
    if (count($passwordParts) !== 4) {
        $errors['password'] = 'Пароль должен содержать 4 части, разделенные символом "-"';
    }
    if (strlen($data['password']) < 12) {
        $errors['password'] = 'Пароль должен содержать не менее 12 символов';
    }
    foreach ($passwordParts as $part) {
        if (empty($part) || preg_match('/^\d/', $part)) {
            $errors['password'] = 'Каждая часть пароля не может начинаться с цифры';
        }
    }
    
    // Валидация телефона
    if (!preg_match('/^\+375\(29\)\d{3}-\d{2}-\d{2}$/', $data['phone'])) {
        $errors['phone'] = 'Неверный формат номера телефона';
    }
    
    return $errors;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'fullname' => trim($_POST['fullname']),
        'login' => trim($_POST['login']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'phone' => trim($_POST['phone'])
    ];
    
    $errors = validateInput($data);
    
    // Проверка капчи
    if ($_POST['captcha_answer'] != $_POST['captcha_correct']) {
        $errors['captcha'] = 'Неверный ответ на капчу';
    }
    
    if (empty($errors)) {
        $conn = getDbConnection();
        
        // Проверка существования пользователя
        $login = $conn->real_escape_string($data['login']);
        $email = $conn->real_escape_string($data['email']);
        $query = "SELECT id FROM users WHERE login = '$login' OR email = '$email'";
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            logMessage("Регистрация завершена ошибкой: пользователь уже существует");
            $_SESSION['error'] = 'Пользователь с таким логином или email уже существует';
            header('Location: register.php');
            exit;
        }
        
        // Хеширование пароля
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        
        // Добавление пользователя
        $fullname = $conn->real_escape_string($data['fullname']);
        $phone = $conn->real_escape_string($data['phone']);
        
        $query = "INSERT INTO users (fullname, login, email, password, phone)
                 VALUES ('$fullname', '$login', '$email', '$hashedPassword', '$phone')";
        
        if ($conn->query($query)) {
            logMessage("Регистрация прошла успешно для пользователя {$data['login']}");
            $_SESSION['success'] = 'Регистрация успешно завершена';
            header('Location: login.php');
        } else {
            logMessage("Ошибка при регистрации: " . $conn->error);
            $_SESSION['error'] = 'Произошла ошибка при регистрации';
            header('Location: register.php');
        }
        
        $conn->close();
        exit;
    } else {
        logMessage("Регистрация завершена ошибкой: " . implode(', ', $errors));
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $data;
        header('Location: register.php');
        exit;
    }
}
