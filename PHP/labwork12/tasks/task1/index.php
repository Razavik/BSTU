<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Обрабатываем параметры из формы
    $lineColor = isset($_POST['lineColor']) ? $_POST['lineColor'] : '#000000';
    $lineWidth = isset($_POST['lineWidth']) ? (int) $_POST['lineWidth'] : 1;
    $lineStyle = isset($_POST['lineStyle']) ? $_POST['lineStyle'] : 'solid';

    // Генерация изображения на основе введенных параметров
    header('Content-Type: image/png');
    $image = imagecreatetruecolor(500, 500); // создаем холст 500x400 пикселей

    // Цвет фона
    $backgroundColor = imagecolorallocate($image, 255, 255, 255); // белый фон
    imagefill($image, 0, 0, $backgroundColor);

    // Преобразуем цвет в RGB
    list($r, $g, $b) = sscanf($lineColor, "#%02x%02x%02x");
    $lineColor = imagecolorallocate($image, $r, $g, $b);

    $white = imagecolorallocate($image, 255, 255, 255);

    // Устанавливаем толщину линии
    imagesetthickness($image, $lineWidth);

    // Устанавливаем стиль линии (пунктирный или сплошной)
    if ($lineStyle == 'dashed') {
        // Чередуем два цвета: один для штриха и один для пробела
        imagesetstyle($image, [
            $lineColor,
            $lineColor,
            $lineColor,     // цвет штриха (цвет линии)
            $white,
            $white,
            $white   // цвет пробела (белый)
        ]);

    } elseif ($lineStyle == 'dotted') {
        // Чередуем два цвета: один для точки и один для пробела
        imagesetstyle($image, [
            $lineColor,
            $white,
            $white,
            $white,
        ]);
    }

    // Рисуем линию от (50, 50) до (450, 350)
    if ($lineStyle == 'dotted' || $lineStyle == 'dashed') {
        imageline($image, 50, 250, 450, 250, IMG_COLOR_STYLED);
    } else {
        imageline($image, 50, 250, 450, 250, $lineColor);
    }

    // Выводим изображение
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

    <!-- Форма для ввода параметров линии -->
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

    <p>После отправки формы будет отрисована линия с выбранными параметрами.</p>
</body>

</html>