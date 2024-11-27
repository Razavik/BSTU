<?php
// Конфигурация базы данных
define('DB_HOST', 'MySQL-8.2');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'labwork15');

// Путь к файлу логов
define('LOG_FILE', __DIR__ . '/../logs/registration.log');

// Создание соединения с базой данных
function getDbConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }
    
    // Установка кодировки
    $conn->set_charset("utf8mb4");
    
    return $conn;
}

// Функция для логирования
function logMessage($message) {
    $logDir = dirname(LOG_FILE);
    if (!file_exists($logDir)) {
        mkdir($logDir, 0777, true);
    }
    
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message\n";
    file_put_contents(LOG_FILE, $logMessage, FILE_APPEND);
}