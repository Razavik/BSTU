<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            text-align: center;
        }

        .c {
            border: 1px solid #333;
            text-align: center;
            /* Рамка */
            display: inline-block;
            margin: 10px 10px;
            width: 250px;
            padding: 10px;
            /* Поля */
            text-decoration: none;
            color: #000;
            border-radius: 10px;
            /* Цвет текста */
        }

        .c:hover {
            /* Тень */
            color: #a00;
            background-color: aqua;
            transition: all 0.5s ease;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="title">
        <h1>Лабораторная работа №10</h1>
        <hr>
    </div>

    <div class="menu">
        <a href="./tasks/categories/index.php" class="c">Задание 2</a>
        <a href="./tasks/products/index.php" class="c">Задание 3</a>
        <a href="./tasks/suppliers/index.php" class="c">Задание 4</a>
    </div>
</body>

</html>