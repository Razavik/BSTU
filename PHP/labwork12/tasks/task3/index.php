<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $values = [
        isset($_POST['value1']) ? (int) $_POST['value1'] : 1,
        isset($_POST['value2']) ? (int) $_POST['value2'] : 1,
        isset($_POST['value3']) ? (int) $_POST['value3'] : 1
    ];

    $totalWidth = max($values) * 100 + 20;
    $totalHeight = count($values) * 60 + 10;

    header('Content-Type: image/png');
    $image = imagecreatetruecolor($totalWidth, $totalHeight);

    $backgroundColor = imagecolorallocate($image, 255, 255, 255);
    $rectangleColors = [
        imagecolorallocate($image, 0, 100, 200),
        imagecolorallocate($image, 0, 100, 160),
        imagecolorallocate($image, 0, 100, 240)
    ];

    imagefill($image, 0, 0, $backgroundColor);

    foreach ($values as $index => $value) {
        $width = $value * 100;
        $x1 = 10;
        $y1 = $index * 60 + 10;
        $x2 = $x1 + $width;
        $y2 = $y1 + 50;

        $color = $rectangleColors[$index % count($rectangleColors)];

        imagefilledrectangle($image, $x1, $y1, $x2, $y2, $color);
    }

    imagepng($image);
    imagedestroy($image);
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание прямоугольников</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .form-container {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="number"] {
            width: 50px;
            margin-right: 10px;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Введите три числа для создания прямоугольников</h1>
    <div class="form-container">
        <form method="POST">
            <label for="value1">Число 1 (от 1 до 5):</label>
            <input type="number" id="value1" name="value1" min="1" max="5" value="1">

            <label for="value2">Число 2 (от 1 до 5):</label>
            <input type="number" id="value2" name="value2" min="1" max="5" value="1">

            <label for="value3">Число 3 (от 1 до 5):</label>
            <input type="number" id="value3" name="value3" min="1" max="5" value="1">

            <button type="submit">Создать прямоугольники</button>
        </form>
    </div>
</body>

</html>