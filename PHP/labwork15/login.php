<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>

<div class="login-form">
    <h2>Вход в систему</h2>
    
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert success">
            <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert error">
            <?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>

    <form action="process_login.php" method="POST">
        <div class="form-group">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="btn">Войти</button>
    </form>
    
    <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
</div>

<?php require_once 'includes/footer.php'; ?>
