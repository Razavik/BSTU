<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Объявляем переменную со строковым значением
    $value = "123";

    // Преобразуем строку в целое число
    $intValue = (int) $value;
    echo "Целое число: $intValue<br>";

    // Преобразуем строку в число с плавающей запятой
    $floatValue = (float) $value;
    echo "Число с плавающей запятой: $floatValue<br>";

    // Производим математическое сложение с числом 10
    $sum = $value + 10;
    $sumInt = $intValue + 10;
    $sumFloat = $floatValue + 10;

    echo "Сумма строки и 10: $sum<br>";
    echo "Сумма целого числа и 10: $sumInt<br>";
    echo "Сумма числа с плавающей запятой и 10: $sumFloat<br>";
    ?>
</body>

</html>