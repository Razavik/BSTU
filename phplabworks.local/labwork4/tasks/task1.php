<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    const f = 3;
    const s = 10;

    define("l", 2005);
    define("k", 5);

    $result = pow(l, k) + sqrt(f) - 2 * s + log(s + l);

    echo "Результат " . $result;
    ?>
</body>

</html>