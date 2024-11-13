<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Категории</title>
    <style>
        form {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <form action="check.php" method="POST">
        <label for="date"><i>Введите дату (например, 20.11.16):</i></label>
        <br>
        <input type="text" name="date" required>
        <br><br>
        <label for="filename"><i>Введите имя файла:</i></label>
        <br>
        <input type="text" name="filename" required>

        <button type="submit">Передать информацию</button>
    </form>
</body>

</html>