<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $numbers = [];
    do {
        $num = rand(-20, 20);
        $numbers[] = $num;
    } while ($num != 0);

    array_pop($numbers); // Удаляем 0
    
    $count = count($numbers);
    $sum = array_sum($numbers);
    $avg = $sum / $count;
    $min = min($numbers);
    $max = max($numbers);

    echo "Количество чисел: $count<br>";
    echo "Среднее значение: $avg<br>";
    echo "Минимум: $min<br>";
    echo "Максимум: $max";
    ?>

</body>

</html>