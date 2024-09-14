<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sentence = "Пример строки для поиска слова";
    $wordToFind = "слова";

    $position = mb_strpos($sentence, $wordToFind);

    if ($position === false) {
        echo "Слово не найдено";
    } else {
        $censoredSentence = str_replace($wordToFind, "****", $sentence);

        echo "Результат замены: " . $censoredSentence . "<br>";

        echo "Оригинальная строка в нижнем регистре: " . mb_strtolower($sentence);
    }

    ?>
</body>

</html>