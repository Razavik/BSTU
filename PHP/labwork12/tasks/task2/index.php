<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Категории</title>
</head>

<body>
    <form action="check.php" method="POST">
        <label for="name">Введите ФИО (через пробел)</label>
        <br>
        <input type="text" name="name" required>
        <br><br>
        <label for="date">Введите дату рождения (dd.mm.yyyy)</label>
        <br>
        <input type="text" name="date" required>
        <br><br>
        <label for="email">Введите e-mail</label>
        <br>
        <input type="text" name="email" required>
        <br><br>
        <label for="phone">Введите номер телефона ((029) 123-23-23)</label>
        <br>
        <input type="text" name="phone" required>
        <br>
        <button type="submit">Передать информацию</button>
    </form>
</body>

</html>