<?php
require_once 'includes/config.php';

session_start();

if (isset($_SESSION['user'])) {
    $login = $_SESSION['user']['login'];
    logMessage("Пользователь {$login} вышел из системы");
}

session_destroy();
header('Location: login.php');
exit;
