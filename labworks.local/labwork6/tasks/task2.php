<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $randomNumbers = array_map(function () {
        return rand(-20, 38);
    }, range(1, 20));

    sort($randomNumbers);

    $firstThree = array_slice($randomNumbers, 0, 3);
    echo "Первые три элемента: " . implode(", ", $firstThree) . "<br>";

    $removedElement = array_splice($randomNumbers, 1, 1, [42]);
    echo "Массив после замены второго элемента: " . implode(", ", $randomNumbers) . "<br>";

    $index = array_search(42, $randomNumbers);
    echo "Индекс нового элемента (42): " . $index . "<br>";
    ?>
</body>

</html>