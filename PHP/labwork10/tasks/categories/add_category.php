<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$name = $_POST['name'];


$query = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
$query->bind_param("s", $name);

if ($query->execute()) {
    header('Location: index.php');
} else {
    echo "Ошибка: " . $query->error;
}

$query->close();
$conn->close();