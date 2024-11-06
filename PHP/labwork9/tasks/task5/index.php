<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщения</title>
</head>

<body>

    <h2>Оставьте сообщение</h2>
    <form action="add_message.php" method="POST">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Отправить</button>
    </form>

    <br><a href="view_messages.php">Просмотреть сообщения</a>

</body>

</html>