<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array1 = ["a" => "apple", "b" => "banana"];
    $array2 = ["b" => "berry", "c" => "cherry"];

    $mergedArray = array_merge_recursive($array1, $array2);

    echo print_r($mergedArray) . "<br>";

    $count = count($mergedArray);
    echo "Количество элементов в объединенном массиве: " . $count . "<br>";
    ?>
</body>

</html>