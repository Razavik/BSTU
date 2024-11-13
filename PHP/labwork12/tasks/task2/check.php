<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $name = $_POST["name"];

    $name_pattern = "/^[А-Я][а-я]{3,} [А-Я][а-я]{3,} [А-Я][а-я]{3,}$/u";

    if (preg_match($name_pattern, $name)) {
        echo "Имя: корректно.";
    } else {
        echo "Имя: не корректно.";
    }

    echo "<br><br>";

    $date = $_POST["date"];

    $date_pattern = "/^\d{2}\.\d{2}\.\d{4}$/";

    if (preg_match($date_pattern, $date)) {
        echo "Дата: корректо.";
    } else {
        echo "Дата: не корректно.";
    }

    echo "<br><br>";

    $email = $_POST["email"];

    $email_pattern = "/^[a-zA-Z0-9]{10,20}@(bstu|shiman)\.(ru|com)$/";

    if (preg_match($email_pattern, $email)) {
        echo "E-mail: корректо.";
    } else {
        echo "E-mail: не корректно.";
    }

    echo "<br><br>";

    $phone = $_POST["phone"];

    $phone_pattern = "/^\(0(29|33|44|25|17)\) \d{3}-\d{2}-\d{2}$/";

    if (preg_match($phone_pattern, $phone)) {
        echo "Телефон: корректо.";
    } else {
        echo "Телефон: не корректно.";
    }
}
