<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $email = $_POST["email"];

    if (strlen($email) > 15) {
        echo "Длина больше 15!";
    } else {
        $email_pattern = "/^[a-zA-Z]+(?:_)?(?:[a-z]+)?@[a-z]{3,}\.(ru|com|net|by)$/";

        if (preg_match($email_pattern, $email))
            echo "Прошло!";
        else
            echo "Не прошло!";
    }
}