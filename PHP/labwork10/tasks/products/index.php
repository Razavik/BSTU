<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$query = $conn->prepare("
    SELECT products.*, categories.name AS category_name, suppliers.name AS supplier_name 
    FROM products 
    JOIN categories ON products.category_id = categories.id
    JOIN suppliers ON products.supplier_id = suppliers.id
");
$query->execute();
$result = $query->get_result();
$products = $result->fetch_all(MYSQLI_ASSOC);

$category_query = $conn->prepare("SELECT * FROM categories");
$category_query->execute();
$category_result = $category_query->get_result();
$categories = $category_result->fetch_all(MYSQLI_ASSOC);

$suppliers_query = $conn->prepare("SELECT * FROM suppliers");
$suppliers_query->execute();
$suppliers_result = $suppliers_query->get_result();
$suppliers = $suppliers_result->fetch_all(MYSQLI_ASSOC);

$query->close();
$category_query->close();
$suppliers_query->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Товары</title>
</head>

<body>
    <h2>Добавить товар</h2>
    <form style="display:flex; flex-direction:column; gap: 20px; max-width: 200px;" action="add_product.php"
        method="POST">
        <input type="text" name="name" placeholder="Название товара" required>
        <textarea name="description" placeholder="Описание" required></textarea>
        <select name="category_id" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['name']); ?></option>
            <?php endforeach; ?>
        </select>
        <select name="supplier_id" required>
            <?php foreach ($suppliers as $supplier): ?>
                <option value="<?php echo $supplier['id']; ?>"><?php echo htmlspecialchars($supplier['name']); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="number" step="0.01" name="price" placeholder="Цена" required>
        <button type="submit">Добавить</button>
    </form>

    <h1>Товары</h1>
    <?php foreach ($products as $product): ?>
        <div style="border:1px solid black; padding:10px; margin-bottom:10px;">
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <p><i><?php echo htmlspecialchars($product['description']); ?></i></p>
            <p>Категория: <?php echo htmlspecialchars($product['category_name']); ?></p>
            <p>Поставщик: <?php echo htmlspecialchars($product['supplier_name']); ?></p>
            <p><?php echo htmlspecialchars($product['price']); ?> бел. р.</p>
        </div>
    <?php endforeach; ?>

    <a href="../categories/index.php">Категории</a>
</body>

</html>