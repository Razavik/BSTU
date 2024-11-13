<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $text = $_POST["text"];

    $email_pattern = "/[a-zA-Z0-9]+@[a-z]+\.[a-z]+/";

    echo preg_replace($email_pattern, "[email]", $text);
}