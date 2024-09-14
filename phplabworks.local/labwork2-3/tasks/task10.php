<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $userName = "Иван";
    $userAge = 30;
    $userBalance = 1234.567;

    echo "Имя: $userName, Возраст: $userAge, Баланс: $userBalance<br>";

    echo "Имя: $userName, Возраст: [$userAge], Баланс: " . number_format($userBalance, 2) . "<br>";
    ?>
</body>

</html>