<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>Гааг Даниил Игоревич</h1>
        <h2>Вариант 1</h2>
        <h2>03.10.2005</h2>
    </header>

    <?php
    // Задание 1
    echo "Задание 1" . "<br>" . "b, c <br><br>";


    // Задание 2
    echo "Задание 2" . "<br>";

    $a = 10 * (3 + 14);
    $b = base_convert($a, 10, 8);
    $c = base_convert($a, 10, 16);
    $d = base_convert($a, 10, 2);

    echo "В десятичной: " . $a . "<br>";
    echo "В восьмиричной: " . $b . "<br>";
    echo "В шестнадцатиричной: " . $c . "<br>";
    echo "В двоичной: " . $d . "<br><br>";

    // Задание 3
    $first = sqrt(256 % 6);
    $second = sqrt(256 % 10);

    echo "Задание 3" . "<br>";
    echo "На 6: " . $first . "<br>";
    echo "На 10: " . $second . "<br><br>";

    // Задание 4
    echo "Задание 4" . "<br>";
    echo 2 << 3 - 1 . "<br><br>";

    // Задание 5
    echo "Задание 5" . "<br>";

    const firstConst = 10;
    define("secondConst", 10);

    echo "Первая константа: " . firstConst . "<br>";
    echo "Вторая константа: " . secondConst . "<br><br>";

    // Задание 6
    echo "Задание 6" . "<br>";
    $t = 3;

    $R = pow(5.1 * sin(M_PI_2 + 10) + 2.3 * cos(M_PI_4), sqrt(abs($t ** 2 - 4 * $t ** 2 - 5 * $t + 3)));
    echo $R . "<br><br>";

    // Задание 7
    echo "Задание 7" . "<br>";

    $str = "Lorem ipsum dolor sit!";

    $randLength = rand(1, intval(strlen($str) / 2));

    $firstSubStr = substr($str, 0, $randLength);
    $secondSubStr = substr($str, $randLength + 1);

    $lastSymbols = mb_convert_case(substr($firstSubStr, -2), MB_CASE_UPPER);

    $firstSubStr = $lastSymbols . substr($firstSubStr, 0, $randLength - 2);

    $arrSecondSubStr = str_split($secondSubStr, 2);

    $newArrSecondSubStr = array_map(function ($elem) {
        return strlen($elem) == 2 ? $elem[0] . ucfirst($elem[1]) : $elem;
    }, $arrSecondSubStr);

    $secondSubStr = implode("", $newArrSecondSubStr);

    $secondSubStr = $secondSubStr . str_repeat("_", 44 - strlen($secondSubStr));

    echo $firstSubStr . $secondSubStr;

    //Задание 8
    
    $arr1 = [1, 2, 3];
    $arr2 = [11, 33, 44];

    $newArr1 = array_merge($arr1, $arr2);

    echo print_r($newArr1) . "<br>";

    $lastElem = array_pop($newArr1);
    array_pop($newArr1);

    array_push($newArr1, 4, 5);

    echo print_r($newArr1) . "<br>";

    $arr_keys = array_keys($newArr1);
    $arr_values = array_values($newArr1);

    echo print_r($arr_keys) . "<br>" . print_r($arr_values) . "<br>";
    sort($newArr1); //sort по сути своей перемешивание
    array_splice($newArr1, 0, 4);

    $sum = array_sum($newArr1);

    echo $sum;

    ?>
</body>

</html>