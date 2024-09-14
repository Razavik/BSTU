<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array1 = [1, 20, 3, 4, 15, 6];
    $array2 = [1, 10, 15, 20, 14, 25];

    $mergedArray = array_merge($array1, $array2);

    echo print_r($mergedArray, true) . "<br>";

    $uniqueArray = array_unique($mergedArray);

    echo print_r($uniqueArray) . "<br>";

    echo "Количество элементов: " . count($uniqueArray) . "<br>";

    $evenNumbers = array_filter($uniqueArray, function ($num) {
        return $num % 2 == 0;
    });

    $squaredNumbers = array_map(function ($num) {
        return $num * $num;
    }, $evenNumbers);

    echo print_r($squaredNumbers) . "<br>";

    echo "Сумма квадратов: " . array_sum($squaredNumbers) . "<br>";
    ?>
</body>

</html>