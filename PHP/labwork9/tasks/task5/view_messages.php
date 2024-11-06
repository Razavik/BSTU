<?php
session_start();

if (isset($_SESSION['messages'])) {
    echo "<h2>Сообщения:</h2>";
    echo "<ul>";
    foreach ($_SESSION['messages'] as $index => $msg) {
        echo "<li><strong>{$msg['name']} ({$msg['time']}):</strong> {$msg['message']} <a href='delete_message.php?index=$index'>Удалить</a></li>";
    }
    echo "</ul>";
} else {
    echo "<h2>Сообщений нет.</h2>";
}
?>

<br><a href="add_message.php">Добавить новое сообщение</a>