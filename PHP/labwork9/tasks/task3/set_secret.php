<?php
session_start();

if (isset($_GET['secret'])) {
    $_SESSION['secret_word'] = $_GET['secret'];
    echo "Секретное слово сохранено!";
}
?>