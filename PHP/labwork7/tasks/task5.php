<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $students = [
        "Иван" => 5,
        "Мария" => 4,
        "Петр" => 3,
        "Анна" => 5,
        "Сергей" => 2,
        "Наталья" => 3
    ];

    $excellent = [];
    $good = [];
    $average = [];

    foreach ($students as $name => $grade) {
        if ($grade == 5) {
            $excellent[] = $name;
        } elseif ($grade == 4) {
            $good[] = $name;
        } else {
            $average[] = $name;
        }
    }

    echo "<ul><li>Отличники: <ul>";
    foreach ($excellent as $name) {
        echo "<li>$name</li>";
    }
    echo "</ul></li><li>Хорошисты: <ul>";
    foreach ($good as $name) {
        echo "<li>$name</li>";
    }
    echo "</ul></li><li>Троечники: <ul>";
    foreach ($average as $name) {
        echo "<li>$name</li>";
    }
    echo "</ul></li></ul>";
    ?>


</body>

</html>