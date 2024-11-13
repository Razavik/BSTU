<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$name = $_POST['name'];

$query = $conn->prepare("INSERT INTO suppliers (name) VALUES (?)");
$query->bind_param("s", $name);
$query->execute();

header('Location: index.php');

$query->close();
$conn->close();
?>