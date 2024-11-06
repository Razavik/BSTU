<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета</title>
</head>

<body>

    <h2>Заполните анкету</h2>
    <form action="result.php" method="GET">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="gender">Пол:</label>
        <select id="gender" name="gender" required>
            <option value="male">Мужчина</option>
            <option value="female">Женщина</option>
        </select><br><br>

        <button type="submit">Отправить</button>
    </form>

</body>

</html>