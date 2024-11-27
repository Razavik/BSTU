<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $circleColor = isset($_POST['circleColor']) ? $_POST['circleColor'] : '#000000';
    $borderColor = isset($_POST['borderColor']) ? $_POST['borderColor'] : '#000000';
    $backgroundColor = isset($_POST['backgroundColor']) ? $_POST['backgroundColor'] : '#FFFFFF';
    $radius = isset($_POST['radius']) ? (int) $_POST['radius'] : 50;
    $borderWidth = isset($_POST['borderWidth']) ? (int) $_POST['borderWidth'] : 1;

    $imageSize = ($radius + $borderWidth) * 2;

    header('Content-Type: image/png');
    $image = imagecreatetruecolor($imageSize, $imageSize);

    list($br, $bg, $bb) = sscanf($backgroundColor, "#%02x%02x%02x");
    $bgColor = imagecolorallocate($image, $br, $bg, $bb);

    list($cr, $cg, $cb) = sscanf($circleColor, "#%02x%02x%02x");
    $circleColor = imagecolorallocate($image, $cr, $cg, $cb);

    list($bor, $bog, $bob) = sscanf($borderColor, "#%02x%02x%02x");
    $borderColor = imagecolorallocate($image, $bor, $bog, $bob);

    imagefill($image, 0, 0, $bgColor);

    imagefilledellipse($image, $imageSize / 2, $imageSize / 2, $radius * 2 + $borderWidth * 2, $radius * 2 + $borderWidth * 2, $borderColor);

    imagefilledellipse($image, $imageSize / 2, $imageSize / 2, $radius * 2, $radius * 2, $circleColor);

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
    <title>Параметры круга</title>
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

        input,
        select {
            margin: 5px 0;
        }

        .range-value {
            font-weight: bold;
            margin-left: 10px;
        }

        button {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Настройка параметров круга</h1>
    <div class="form-container">
        <form method="POST">
            <label for="circleColor">Цвет круга:</label>
            <input type="color" id="circleColor" name="circleColor" value="#FF0000">

            <label for="borderColor">Цвет обводки:</label>
            <input type="color" id="borderColor" name="borderColor" value="#000000">

            <label for="backgroundColor">Цвет фона:</label>
            <input type="color" id="backgroundColor" name="backgroundColor" value="#FFFFFF">

            <label for="radius">Радиус круга (в пикселях):</label>
            <input type="number" id="radius" name="radius" min="10" max="400" value="200">

            <label for="borderWidth">Толщина обводки (в пикселях):</label>
            <input type="range" id="borderWidth" name="borderWidth" min="1" max="50" value="1"
                oninput="updateBorderWidthValue()">
            <span id="borderWidthValue" class="range-value">1</span>

            <button type="submit">Нарисовать круг</button>
        </form>
    </div>

    <script>
        function updateBorderWidthValue() {
            const rangeInput = document.getElementById('borderWidth');
            const rangeValueDisplay = document.getElementById('borderWidthValue');
            rangeValueDisplay.textContent = rangeInput.value;
        }

        updateBorderWidthValue();
    </script>
</body>

</html>