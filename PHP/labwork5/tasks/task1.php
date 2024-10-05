<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $firstName = "Daniil";
    $lastName = "Haah";

    $fullName = sprintf("%s %s", $firstName, $lastName);

    echo $fullName, "<br>";
    echo strlen($fullName),"<br>";
    ?>
</body>

</html>