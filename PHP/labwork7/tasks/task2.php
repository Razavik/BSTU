<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);

    $min = min($a, $b, $c);

    if ($min > 4):
        if ($min >= 9):
            echo "Вы отличник! Поздравляю!";
        else:
            echo "Вы сдали!";
        endif;
    else:
        echo "Вас отчислят!";
    endif;
    ?>

</body>

</html>