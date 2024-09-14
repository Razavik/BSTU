<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string = "скоро надо будет писать диплом";

    $firstSpacePos = strpos($string, " ");
    $secondSpacePos = strpos($string, " ", $firstSpacePos + 1);

    echo "Позиция второго пробела: $secondSpacePos<br>";
    
    $string = rtrim($string, "!") . "!";

    echo $string;
    ?>
</body>

</html>