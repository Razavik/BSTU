<?php
$conn = mysqli_connect('MySQL-8.2', 'root', '', 'mini_shop');
$old_name = $_POST['old_name'];
$new_name = $_POST['new_name'];

$query = $conn->prepare("UPDATE categories SET name = :new_name WHERE name = :old_name");
$query->execute(['new_name' => $new_name, 'old_name' => $old_name]);

header('Location: categories.php');
