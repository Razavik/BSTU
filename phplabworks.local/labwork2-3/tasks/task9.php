<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $stringVar = "Hello, World!";
    $intVar = 42;
    $floatVar = 3.14;
    $boolVar = true;

    echo var_dump($stringVar), "<br>";
    echo var_dump($intVar), "<br>";
    echo var_dump($floatVar), "<br>";
    echo var_dump($boolVar), "<br>";

    echo "is_string(\$stringVar): " . (is_string($stringVar) ? 'true' : 'false') . "<br>";
    echo "is_int(\$intVar): " . (is_int($intVar) ? 'true' : 'false') . "<br>";
    echo "is_float(\$floatVar): " . (is_float($floatVar) ? 'true' : 'false') . "<br>";
    echo "is_bool(\$boolVar): " . (is_bool($boolVar) ? 'true' : 'false') . "<br>";
    ?>


</body>

</html>