<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$old_name = $_POST['old_name'];
$new_name = $_POST['new_name'];

$query = $conn->prepare("UPDATE categories SET name = ? WHERE name = ?");
$query->bind_param("ss", $new_name, $old_name);

if ($query->execute()) {
    header('Location: index.php');
} else {
    echo "Ошибка: " . $query->error;
}

$query->close();
$conn->close();
