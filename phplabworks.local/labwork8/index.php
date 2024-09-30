<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'function.php';

    // Задача 1
    $array = [1, 2, 3, 4, 5];
    echo "Задача 1: my_dump()<br>";
    my_dump($array);



    // Задача 2
    echo "<br>Задача 2: randomList и summList()<br>";
    $X = randomList(5);
    $Y = randomList(10);
    $Z = randomList(15);

    echo "Массив X: ";
    my_dump($X);
    echo "Сумма чётных элементов X: " . summList($X) . "<br>";

    echo "Массив Y: ";
    my_dump($Y);
    echo "Сумма чётных элементов Y: " . summList($Y) . "<br>";

    echo "Массив Z: ";
    my_dump($Z);
    echo "Сумма чётных элементов Z: " . summList($Z) . "<br>";



    // Задача 3
    echo "<br>Задача 3: generatePassword()<br>";
    echo "Сгенерированный пароль: " . generatePassword(10, true, true, true) . "<br>";



    // Задача 4
    echo "<br>Задача 4: callTwice()<br>";
    $func = function () {
        echo "Hello!<br>";
    };
    $doubleFunc = callTwice($func);
    $doubleFunc();



    // Задача 5
    echo "<br>Задача 5: Простые числа до 20<br>";
    my_dump(getPrimes(20));



    // Задача 6
    echo "<br>Задача 6: Форматирование даты<br>";
    echo "Форматированная дата: " . formatDate('2024-09-30') . "<br>";



    // Задача 7
    echo "<br>Задача 7: Частота символов<br>";
    my_dump(charFrequency('hello world'));



    // Задача 8
    echo "<br>Задача 8: Меню на сегодня<br>";
    my_dump(generateMenu());



    // Задача 9
    echo "<br>Задача 9: Нажатие кнопки<br>";
    if (isset($_POST['click'])) {
        my_click();
        echo "Время нажатия записано в файл!";
    }
    ?>

    <form method="POST">
        <button type="submit" name="click">Нажми меня</button>
    </form>
</body>

</html>