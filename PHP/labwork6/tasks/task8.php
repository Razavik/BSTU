<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string = "Anna. David. John. Marie. Zoe";

    $array = explode(". ", $string);

    sort($array);

    $reversedArray = array_reverse($array);

    echo print_r($reversedArray, true) . "<br>";

    $firstName = reset($array);
    $lastName = end($array);

    echo "Первое имя: " . $firstName . "<br>";
    echo "Последнее имя: " . $lastName . "<br>";
    ?>
</body>

</html>