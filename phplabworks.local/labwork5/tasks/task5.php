<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = "We are the champions - my friend";

    $dPosFirst = strpos($str, "d");
    $dPosLast = strrpos($str, "d");
    $ePos = strpos($str, "e", 10);

    echo " ". $dPosFirst ." ". $dPosLast . " ". $ePos;
    ?>
</body>

</html>