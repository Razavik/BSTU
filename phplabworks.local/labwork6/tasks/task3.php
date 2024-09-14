<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $array = array("name" => "Daniil", "age" => 18, "email" => "razaviby@gmail.com");
    echo implode(" ", array_keys($array)) . "<br>";
    echo implode(" ", array_values($array)) . "<br>";

    $array = $array + ["gender"=> "male"];

    echo implode(" ", array_keys($array)) . "<br>";
    echo implode(" ", array_values($array)) . "<br>";
    ?>

</body>

</html>