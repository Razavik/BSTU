<?php
session_start();

if (isset($_GET['index']) && isset($_SESSION['messages'][$_GET['index']])) {
    $deletedMessage = $_SESSION['messages'][$_GET['index']];

    $logEntry = date('Y-m-d H:i:s') . " - Сообщение от {$deletedMessage['name']} было удалено: {$deletedMessage['message']}\n";
    file_put_contents('log.txt', $logEntry, FILE_APPEND);

    unset($_SESSION['messages'][$_GET['index']]);
    $_SESSION['messages'] = array_values($_SESSION['messages']); // Пересоздание индексов

    echo "Сообщение удалено!";
}
?>

<br><a href="view_messages.php">Назад к сообщениям</a>