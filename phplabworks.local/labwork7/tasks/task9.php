<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dayNumber = date('w');
    switch ($dayNumber) {
        case 0:
            echo "Воскресенье (Sunday)";
            break;
        case 1:
            echo "Понедельник (Monday)";
            break;
        case 2:
            echo "Вторник (Tuesday)";
            break;
        case 3:
            echo "Среда (Wednesday)";
            break;
        case 4:
            echo "Четверг (Thursday)";
            break;
        case 5:
            echo "Пятница (Friday)";
            break;
        case 6:
            echo "Суббота (Saturday)";
            break;
    }
    ?>


</body>

</html>