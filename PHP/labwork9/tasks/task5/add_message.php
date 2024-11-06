<?php
session_start();

if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

if (isset($_POST['name']) && isset($_POST['message'])) {
    $message = [
        'name' => $_POST['name'],
        'time' => date('H:i'),
        'message' => $_POST['message']
    ];

    $_SESSION['messages'][] = $message;
    echo "Сообщение добавлено!";
}
?>

<br><a href="view_messages.php">Просмотреть сообщения</a>