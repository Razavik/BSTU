<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$name = $_POST['name'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];
$supplier_id = $_POST['supplier_id'];
$price = $_POST['price'];

$supplier_check = $conn->prepare("SELECT is_active FROM suppliers WHERE id = ?");
$supplier_check->bind_param("i", $supplier_id);
$supplier_check->execute();
$result = $supplier_check->get_result();
$supplier_active = $result->fetch_assoc()['is_active'];

if ($supplier_active) {
    $query = $conn->prepare("INSERT INTO products (name, description, category_id, supplier_id, price) VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("ssiid", $name, $description, $category_id, $supplier_id, $price);
    $query->execute();

    header('Location: products.php');
} else {
    echo "Ошибка: Нельзя добавить товар с заблокированным поставщиком.";
}

$supplier_check->close();
$query->close();
$conn->close();
?>