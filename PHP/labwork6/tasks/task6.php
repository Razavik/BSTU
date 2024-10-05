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
        ["name" => "Daniil", "age" => 18, "grade" => 9],
        ["name" => "Matvey", "age" => 3, "grade" => -2],
        ["name" => "Nikita", "age" => 19, "grade" => 10],
        ["name" => "Evgeniy", "age" => 19, "grade" => 10]
    ];

    echo print_r(array_column($students, "name")) . "<br>";
    $students = array_map(function ($student) {
        $student["grade"] += 5;
        return $student;
    }, $students);

    print_r($students)
    ?>
</body>

</html>