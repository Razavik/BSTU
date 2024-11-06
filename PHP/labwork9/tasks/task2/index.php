<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логин и Пароль</title>
</head>

<body>

    <h2>Введите логин и пароль</h2>
    <form action="result.php" method="POST">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Отправить</button>
    </form>

</body>

</html>