<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$id = $_POST['id'];

$query = $conn->prepare("DELETE FROM categories WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();

header('Location: index.php');

$query->close();
$conn->close();
?>