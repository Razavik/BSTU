<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$name = $_POST['name'];

$query = $conn->prepare("UPDATE suppliers SET is_active = FALSE WHERE name = ?");
$query->bind_param("s", $name);
$query->execute();

header('Location: index.php');

$query->close();
$conn->close();
?>