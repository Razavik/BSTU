<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fruits = ["apple", "banana", "cherry"];

    array_push($fruits, "orange");

    $fruits = array_reverse($fruits);

    $lastElement = array_pop($fruits);
    echo "Удалённый элемент: " . $lastElement . "<br>";

    echo "Изменённый массив: " . implode(", ", $fruits) . "<br>";
    ?>

</body>

</html>