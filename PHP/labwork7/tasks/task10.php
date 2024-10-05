<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $s = [
        0 => ['text' => 'ПРИВЕТ, Андрей!', 'teg' => 'h1', 'color' => 'red'],
        1 => ['text' => 'Как твои дела?', 'teg' => 'p', 'color' => 'blue'],
        2 => ['text' => 'Сегодня прекрасный день!', 'teg' => 'h2', 'color' => 'green'],
        3 => ['text' => 'Не забывай про встречу!', 'teg' => 'h3', 'color' => 'orange'],
        4 => ['text' => 'Увидимся завтра', 'teg' => 'p', 'color' => 'purple'],
        5 => ['text' => 'Это важное сообщение', 'teg' => 'div', 'color' => 'brown'],
        6 => ['text' => 'Пожалуйста, ответь', 'teg' => 'span', 'color' => 'yellow'],
        7 => ['text' => 'Спасибо за внимание!', 'teg' => 'h1', 'color' => 'pink']
    ];

    foreach ($s as $item) {
        $text = $item['text'];
        $tag = $item['teg'];
        $color = $item['color'];
        echo "<$tag style='color:$color;'>$text</$tag><br>";
    }
    ?>

</body>

</html>