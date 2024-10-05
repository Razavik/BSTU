<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 5;
    $b = 10;

    $result = ($a > 0) && ($b < 15);
    echo "Результат проверки (&&): " . ($result ? 'true' : 'false') . "<br>";

    // Проверяем, больше ли $a, чем 0 или меньше ли $b, чем 15
    $result = ($a > 0) || ($b < 15);
    echo "Результат проверки (||): " . ($result ? 'true' : 'false') . "<br>";

    $isNegative = !($a >= 0);
    echo "Является ли \$a отрицательным числом? " . ($isNegative ? 'Да' : 'Нет') . "<br>";

    $price = 1234.56;
    $formattedPrice = number_format($price, 2, ',', ' ');
    echo "Цена: $formattedPrice<br>";

    $stringValue = "1000000";
    $intValue = (int) $stringValue;
    $floatValue = (float) $stringValue;

    echo "Целое число: $intValue<br>";
    echo "Число с плавающей запятой: $floatValue<br>";
    ?>
</body>

</html>