<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 12;
    $b = 5;
    
    $andResult = $a & $b;
    echo "Результат побитового И (AND): $andResult<br>";

    $orResult = $a | $b;
    echo "Результат побитового ИЛИ (OR): $orResult<br>";

    $xorResult = $a ^ $b;
    echo "Результат исключающего ИЛИ (XOR): $xorResult<br>";

    $leftShiftResult = $a << 1;
    echo "Результат сдвига влево (<<): $leftShiftResult<br>";

    $rightShiftResult = $a >> 1;
    echo "Результат сдвига вправо (>>): $rightShiftResult<br>";
    ?>

</body>

</html>