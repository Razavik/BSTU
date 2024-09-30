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
        '12' => ['tovar' => 'Рог Осьминога', 'price' => 12, 'count' => 100],
        '223' => ['tovar' => 'Голова скунса', 'price' => 8, 'count' => 13],
        '45' => ['tovar' => 'Лапа дракона', 'price' => 50, 'count' => 7],
        '99' => ['tovar' => 'Зуб единорога', 'price' => 35, 'count' => 22],
        '78' => ['tovar' => 'Крыло феникса', 'price' => 60, 'count' => 5],
        '154' => ['tovar' => 'Шкура медведя', 'price' => 45, 'count' => 10],
        '310' => ['tovar' => 'Хвост василиска', 'price' => 100, 'count' => 3],
        '47' => ['tovar' => 'Чешуя рыбы-дракона', 'price' => 25, 'count' => 15],
        '512' => ['tovar' => 'Грива льва', 'price' => 40, 'count' => 8],
        '89' => ['tovar' => 'Коготь тигра', 'price' => 20, 'count' => 30],
        '22' => ['tovar' => 'Клык волка', 'price' => 18, 'count' => 25],
        '399' => ['tovar' => 'Ухо слона', 'price' => 15, 'count' => 50]
    ];

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Товар</th><th>Цена (слезинок студентов)</th><th>Количество</th></tr>";

    foreach ($s as $item) {
        echo "<tr>";
        echo "<td>{$item['tovar']}</td>";
        echo "<td>{$item['price']} слезинок студентов</td>";
        echo "<td>{$item['count']}</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>


</body>

</html>