<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lineColor = isset($_POST['lineColor']) ? $_POST['lineColor'] : '#000000';
    $lineWidth = isset($_POST['lineWidth']) ? (int) $_POST['lineWidth'] : 1;
    $lineStyle = isset($_POST['lineStyle']) ? $_POST['lineStyle'] : 'solid';

    header('Content-Type: image/png');
    $image = imagecreatetruecolor(500, 500);

    $backgroundColor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $backgroundColor);

    list($r, $g, $b) = sscanf($lineColor, "#%02x%02x%02x");
    $lineColor = imagecolorallocate($image, $r, $g, $b);

    $white = imagecolorallocate($image, 255, 255, 255);

    imagesetthickness($image, $lineWidth);

    function createLineStyle($lineColor, $white, $lineWidth, $type)
    {
        $pattern = [];
        if ($type == 'dashed') {
            for ($i = 0; $i < $lineWidth * 5; $i++) {
                $pattern[] = $lineColor;
            }
            for ($i = 0; $i < $lineWidth * 3; $i++) {
                $pattern[] = $white;
            }
        } elseif ($type == 'dotted') {
            for ($i = 0; $i < $lineWidth; $i++) {
                $pattern[] = $lineColor;
            }
            for ($i = 0; $i < $lineWidth * 3; $i++) {
                $pattern[] = $white;
            }
        }
        return $pattern;
    }

    if ($lineStyle == 'dashed' || $lineStyle == 'dotted') {
        $style = createLineStyle($lineColor, $white, $lineWidth, $lineStyle);
        imagesetstyle($image, $style);
        imageline($image, 50, 250, 450, 250, IMG_COLOR_STYLED);
    } else {
        imageline($image, 50, 250, 450, 250, $lineColor);
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
    <title>Рисование линии на PHP</title>
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
            margin: 5px 0;
        }

        input,
        select {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>Рисование линии с параметрами</h1>

    <div class="form-container">
        <form method="POST">
            <label for="lineColor">Цвет линии:</label>
            <input type="color" id="lineColor" name="lineColor" value="#000000">

            <label for="lineWidth">Толщина линии:</label>
            <input type="number" id="lineWidth" name="lineWidth" min="1" max="10" value="1">

            <label for="lineStyle">Стиль линии:</label>
            <select id="lineStyle" name="lineStyle">
                <option value="solid">Сплошная</option>
                <option value="dashed">Пунктирная</option>
                <option value="dotted">Точечная</option>
            </select>

            <button type="submit">Нарисовать линию</button>
        </form>
    </div>
</body>

</html>