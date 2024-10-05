<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $n = 3 * 10;
    $numbers = [];
    for ($i = 0; $i < 24; $i++) {
        $numbers[] = rand(1, $n);
    }

    $sumSquares = 0;
    foreach ($numbers as $num) {
        if ($num % 2 == 0) {
            $sumSquares += $num * $num;
        }
    }

    $sqrtSum = ceil(sqrt($sumSquares));
    echo "Округленный корень: $sqrtSum";
    ?>

</body>

</html>