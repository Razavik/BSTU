<?php
$conn = new mysqli('MySQL-8.2', 'root', '', 'mini_shop');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$query = $conn->prepare("SELECT * FROM suppliers");
$query->execute();
$result = $query->get_result();
$suppliers = $result->fetch_all(MYSQLI_ASSOC);

$query->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Поставщики</title>
</head>

<body>
    <h1>Поставщики</h1>
    <ul>
        <?php foreach ($suppliers as $supplier): ?>
            <li><?php echo htmlspecialchars($supplier['name']); ?> -
                <?php echo $supplier['is_active'] ? "Активен" : "Заблокирован"; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="categories.php">Категории</a>

    <h2>Добавить поставщика</h2>
    <form action="add_supplier.php" method="POST">
        <input type="text" name="name" required>
        <button type="submit">Добавить</button>
    </form>

    <h2>Блокировать поставщика</h2>
    <form action="block_supplier.php" method="POST">
        <input type="number" name="id" required>
        <button type="submit">Блокировать</button>
    </form>
</body>

</html>