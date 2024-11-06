<?php
$conn = mysqli_connect('MySQL-8.2', 'root', '', 'mini_shop');
$name = $_POST['name'];

$query = $pdo->prepare("INSERT INTO categories (name) VALUES (:name)");
$query->execute(['name' => $name]);

header('Location: index.php');
