<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Анкета-опросник</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }

        label {
            font-weight: bold;
        }

        input,
        select,
        textarea {
            margin-bottom: 15px;
            padding: 5px;
            font-size: 14px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin: 0;
        }

        button {
            padding: 10px;
            font-size: 16px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .point {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .container {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h2>Анкета-опросник</h2>
    <form action="result.php" method="POST">
        <label for="email">Ваш Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="date">Дата рождения:</label>
        <input type="date" id="date" name="date" required />

        <div class="container">
            <label>Ваш пол:</label>
            <div class="point">
                <label for="male">Мужчина</label>
                <input type="radio" id="male" name="gender" value="Мужчина" required />
            </div>

            <div class="point">
                <label for="female">Женщина</label>
                <input type="radio" id="female" name="gender" value="Женщина" required />
            </div>
        </div>

        <div class="container">
            <label>Какие языки программирования вы знаете?</label>
            <div class="point">
                <label for="python">Python</label>
                <input type="checkbox" id="python" name="languages[]" value="Python" />
            </div>
            <div class="point">
                <label for="javascript">JavaScript</label>
                <input type="checkbox" id="javascript" name="languages[]" value="JavaScript" />
            </div>

            <div class="point">
                <label for="csharp">C#</label>
                <input type="checkbox" id="csharp" name="languages[]" value="C#" />
            </div>
        </div>


        <input type="hidden" name="form_type" value="Анкета-опросник" />

        <label for="experience">Ваш опыт работы в IT:</label>
        <select id="experience" name="experience" required>
            <option value="менее 1 года">менее 1 года</option>
            <option value="1-3 года">1-3 года</option>
            <option value="более 3 лет">более 3 лет</option>
        </select>

        <label for="name">Ваше имя:</label>
        <input type="text" id="name" name="name" required />

        <label for="phone">Номер телефона:</label>
        <input type="tel" id="phone" name="phone" required />

        <label for="comment">Ваши комментарии:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <button type="submit">Отправить</button>
    </form>
</body>

</html>