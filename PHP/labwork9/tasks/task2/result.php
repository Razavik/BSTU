<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Маскировка пароля
    $maskedPassword = $password[0];

    for ($i = 1; $i < strlen($password); $i++) {
        if ($i % 4 == 1 || $i % 4 == 3) {
            $maskedPassword .= '#';
        } else if ($i % 4 == 2) {
            $maskedPassword .= '*';
        } else {
            $maskedPassword .= $password[$i];
        }
    }

    echo "<h2>Ваш логин: $login</h2>";
    echo "<h2>Ваш пароль: $maskedPassword</h2>";
}
?>