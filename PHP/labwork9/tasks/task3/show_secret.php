<?php
session_start();

if (isset($_SESSION['secret_word'])) {
    echo "<h2>Ваше секретное слово: " . $_SESSION['secret_word'] . "</h2>";
} else {
    echo "<h2>Секретное слово не установлено.</h2>";
}
?>