<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo var_dump((bool) ""), "<br>";
    echo var_dump((bool) "-12"), "<br>";
    echo var_dump((bool) -12), "<br>";
    echo var_dump((bool) 0), "<br>";
    echo var_dump((bool) null), "<br>";
    echo var_dump((bool) "12"), "<br>";
    echo var_dump((bool) "0"), "<br>";
    echo var_dump((bool) array(12)), "<br>";
    echo var_dump((bool) array()), "<br>";
    echo var_dump((bool) "false"), "<br>";
    echo var_dump((bool) false), "<br>";
    echo var_dump((bool) "1-1"), "<br>";
    echo var_dump((bool) "0/0"), "<br>";
    echo var_dump((bool) (1 / 3)), "<br>";
    ?>
</body>

</html>