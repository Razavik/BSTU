<?php
// Подключение к базе данных
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение товаров и категорий
$query = $conn->prepare("
    SELECT products.*, categories.name AS category_name 
    FROM products 
    JOIN categories ON products.category_id = categories.id
");
$query->execute();
$result = $query->get_result();
$products = $result->fetch_all(MYSQLI_ASSOC);

// Получение всех категорий
$category_query = $conn->prepare("SELECT * FROM categories");
$category_query->execute();
$category_result = $category_query->get_result();
$categories = $category_result->fetch_all(MYSQLI_ASSOC);

// Закрытие запросов и соединения
$query->close();
$category_query->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Товары</title>
</head>

<body>
    <h1>Товары</h1>
    <?php foreach ($products as $product): ?>
        <div style="border:1px solid black; padding:10px; margin-bottom:10px;">
            <h2><?php echo htmlspecialchars($product['name']); ?></h2>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <p><?php echo htmlspecialchars($product['category_name']); ?></p>
            <p><?php echo htmlspecialchars($product['price']); ?> бел. р.</p>
        </div>
    <?php endforeach; ?>

    <a href="categories.php">Категории</a>

    <h2>Добавить товар</h2>
    <form action="add_product.php" method="POST">
        <input type="text" name="name" placeholder="Название товара" required>
        <textarea name="description" placeholder="Описание" required></textarea>
        <select name="category_id" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['name']); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="number" step="0.01" name="price" placeholder="Цена" required>
        <button type="submit">Добавить</button>
    </form>
</body>

</html>