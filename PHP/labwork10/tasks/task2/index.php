<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$query = $conn->prepare("SELECT * FROM categories");
$query->execute();

$result = $query->get_result();
$categories = $result->fetch_all(MYSQLI_ASSOC);

$query->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Категории</title>
</head>

<body>
    <h1>Категории</h1>
    <ol>
        <?php foreach ($categories as $category): ?>
            <li><?php echo htmlspecialchars($category['name']); ?></li>
        <?php endforeach; ?>
    </ol>

    <!-- Ссылки на другие страницы -->
    <a href="../task3/index.php">Товары</a> |
    <a href="../task4/index.php">Поставщики</a>

    <h2>Добавить категорию</h2>
    <form action="add_category.php" method="POST">
        <input type="text" name="name" required>
        <button type="submit">Добавить</button>
    </form>

    <h2>Удалить категорию</h2>
    <form action="delete_category.php" method="POST">
        <input type="number" name="id" required>
        <button type="submit">Удалить</button>
    </form>

    <h2>Изменить категорию</h2>
    <form action="update_category.php" method="POST">
        <input type="text" name="old_name" placeholder="Текущее название" required>
        <input type="text" name="new_name" placeholder="Новое название" required>
        <button type="submit">Изменить</button>
    </form>
</body>

</html>