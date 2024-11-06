<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Секретное слово</title>
</head>

<body>

    <h2>Введите секретное слово</h2>
    <form action="set_secret.php" method="GET">
        <label for="secret">Секретное слово:</label>
        <input type="text" id="secret" name="secret" required><br><br>

        <button type="submit">Сохранить</button>
    </form>

    <br>

    <a href="show_secret.php">Показать секретное слово</a>
    <br>
    <a href="change_secret.php">Изменить секретное слово</a>

</body>

</html>