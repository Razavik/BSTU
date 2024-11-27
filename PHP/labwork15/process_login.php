<?php
require_once 'includes/config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    
    $conn = getDbConnection();
    
    // Поиск пользователя
    $login = $conn->real_escape_string($login);
    $query = "SELECT * FROM users WHERE login = '$login'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            // Успешная авторизация
            $_SESSION['user'] = [
                'id' => $user['id'],
                'login' => $user['login'],
                'fullname' => $user['fullname']
            ];
            
            logMessage("Успешный вход пользователя {$login}");
            header('Location: index.php');
            exit;
        } else {
            // Неверный пароль
            logMessage("Неудачная попытка входа для пользователя {$login}");
            $_SESSION['error'] = 'Неверный логин или пароль';
            header('Location: login.php');
            exit;
        }
    } else {
        // Пользователь не найден
        logMessage("Неудачная попытка входа: пользователь {$login} не найден");
        $_SESSION['error'] = 'Неверный логин или пароль';
        header('Location: login.php');
        exit;
    }
    
    $conn->close();
} else {
    header('Location: login.php');
    exit;
}
