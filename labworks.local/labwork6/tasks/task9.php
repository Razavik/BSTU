<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $city = ["Минск", "Брест", "Витебск", "Бобруйск"];
    $temp = [-5, -8, 10, 25];

    $cityTemp = array_combine($city, $temp);

    echo print_r($cityTemp, true) . "<br>";

    arsort($cityTemp);

    foreach ($cityTemp as $city => $temperature) {
        echo $city . ": " . $temperature . "°C<br>";
    }

    $maxTempCity = array_keys($cityTemp, max($cityTemp))[0];
    echo "Город с самой высокой температурой: " . $maxTempCity . "<br>";

    $averageTemp = array_sum($temp) / count($temp);
    echo "Средняя температура: " . $averageTemp . "°C<br>";
    ?>

</body>

</html>