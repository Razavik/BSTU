<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array1 = [1, 2, 3, 4];
    $array2 = [3, 4, 5, 6];

    $diff = array_diff($array1, $array2);
    echo print_r($diff) . "<br>";

    $intersect = array_intersect($array1, $array2);
    echo print_r($intersect) . "<br>";
    ?>

</body>

</html>