<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tems = [
        ["id" => 1, "name" => "Глава 1", "parent_id" => 0],
        ["id" => 2, "name" => "Глава 2", "parent_id" => 0],
        ["id" => 3, "name" => "Глава 3", "parent_id" => 0],
        ["id" => 4, "name" => "Глава 4", "parent_id" => 0],
        ["id" => 5, "name" => "Основы языка PHP. Сценарии", "parent_id" => 1],
        ["id" => 6, "name" => "Использование web-сервера для выполнения PHP-сценариев", "parent_id" => 1],
        ["id" => 7, "name" => "Первый PHP-скрипт", "parent_id" => 1],
        ["id" => 8, "name" => "Общие понятия о переменных в PHP", "parent_id" => 2],
        ["id" => 9, "name" => "Типы данных (переменных) в PHP", "parent_id" => 2],
        ["id" => 10, "name" => "Арифметические операции", "parent_id" => 3],
        ["id" => 11, "name" => "Операции инкремента и декремента", "parent_id" => 3],
        ["id" => 12, "name" => "Операции присвоения", "parent_id" => 3],
        ["id" => 13, "name" => "Простые математические функции", "parent_id" => 4],
        ["id" => 14, "name" => "Выработка случайных чисел", "parent_id" => 4],
        ["id" => 15, "name" => "Математические константы", "parent_id" => 4]
    ];

    function printChapters($tems)
    {
        echo "<ul>";

        foreach ($tems as $chapter) {
            if ($chapter['parent_id'] == 0) {
                echo "<li>{$chapter['name']}";

                $subchapters = array_filter($tems, function ($item) use ($chapter) {
                    return $item['parent_id'] == $chapter['id'];
                });

                if (!empty($subchapters)) {
                    echo "<ul>";
                    foreach ($subchapters as $subchapter) {
                        echo "<li>{$subchapter['name']}</li>";
                    }
                    echo "</ul>";
                }

                echo "</li>";
            }
        }

        echo "</ul>";
    }

    printChapters($tems);
    ?>
</body>

</html>