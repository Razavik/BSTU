<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['image'])) {
        $selectedImage = $_POST['image'];
    } elseif (isset($_POST['effect']) && isset($_POST['imageToEdit'])) {
        $selectedImage = $_POST['imageToEdit'];
        $selectedEffect = $_POST['effect'];

        header('Content-Type: image/png');
        $image = imagecreatefromjpeg($selectedImage);

        if ($selectedEffect === 'grayscale') {
            imagefilter($image, IMG_FILTER_GRAYSCALE);
        } elseif ($selectedEffect === 'brightness') {
            imagefilter($image, IMG_FILTER_BRIGHTNESS, 20);
        } elseif ($selectedEffect === 'contrast') {
            imagefilter($image, IMG_FILTER_CONTRAST, -20);
        } elseif ($selectedEffect === 'invert') {
            imagefilter($image, IMG_FILTER_NEGATE);
        } elseif ($selectedEffect === 'edge') {
            imagefilter($image, IMG_FILTER_EDGEDETECT);
        }

        imagepng($image);
        imagedestroy($image);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Применение эффектов к изображению</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #333;
        }

        .select-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .select-form label {
            font-size: 18px;
        }

        .select-form select {
            height: 40px;
            font-size: 16px;
            width: 80%;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            width: 100%;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-container>label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2rem;
            color: #333;
        }

        .form-container button {
            background-color: #007bff;
            color: white;
            font-size: 1.1rem;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .form-container fieldset {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px 5px 0 0;
        }

        .form-container legend {
            font-weight: bold;
            color: #007bff;
            text-align: center;
        }

        .preview {
            margin-top: 30px;
            text-align: center;
        }

        .preview img {
            max-width: 400px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .preview p {
            font-size: 1.1rem;
            color: #333;
            margin-top: 10px;
        }

        .effect-radio * {
            display: block;
        }

        .effect-radio {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 1.1rem;
            color: #333;
        }

        .effect-radio input {
            width: 13px;
        }

        span {
            text-wrap: nowrap;
            width: 180px;
        }

        fieldset div {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }
    </style>
</head>

<body>

    <h1>Выберите изображение и эффект</h1>

    <!-- Первая форма: выбор изображения для отображения -->
    <div class="form-container">
        <form class="select-form" method="POST">
            <label for="image">Выберите изображение:</label>
            <select id="image" name="image" required>
                <option value="image1.jpg" <?= (isset($selectedImage) && $selectedImage == 'image1.jpg') ? 'selected' : '' ?>>Изображение 1</option>
                <option value="image2.jpg" <?= (isset($selectedImage) && $selectedImage == 'image2.jpg') ? 'selected' : '' ?>>Изображение 2</option>
                <option value="image3.jpg" <?= (isset($selectedImage) && $selectedImage == 'image3.jpg') ? 'selected' : '' ?>>Изображение 3</option>
            </select>

            <button type="submit">Показать изображение</button>
        </form>
    </div>

    <?php if (isset($selectedImage)): ?>
        <div class="preview">
            <h2>Предпросмотр изображения</h2>
            <p><strong>Адрес изображения:</strong> <?= htmlspecialchars($selectedImage) ?></p>
            <img src="<?= htmlspecialchars($selectedImage) ?>" alt="image">
        </div>

        <div class="form-container">
            <form method="POST">
                <input type="hidden" name="imageToEdit" value="<?= htmlspecialchars($selectedImage) ?>">
                <fieldset>
                    <legend>Выберите эффект:</legend>
                    <div>
                        <label class="effect-radio">
                            <span>Без эффекта</span>
                            <input type="radio" name="effect" value="none" checked>
                        </label>

                        <label class="effect-radio">
                            <span>Чёрно-белый</span>
                            <input type="radio" name="effect" value="grayscale">
                        </label>

                        <label class="effect-radio">
                            <span>Увеличить яркость</span>
                            <input type="radio" name="effect" value="brightness">
                        </label>

                        <label class="effect-radio">
                            <span>Уменьшить контраст</span>
                            <input type="radio" name="effect" value="contrast">
                        </label>

                        <label class="effect-radio">
                            <span>Инверсия цветов</span>
                            <input type="radio" name="effect" value="invert">
                        </label>

                        <label class="effect-radio">
                            <span>Обнаружение границ</span>
                            <input type="radio" name="effect" value="edge">
                        </label>
                    </div>
                </fieldset>

                <button type="submit">Применить эффект</button>
            </form>
        </div>
    <?php endif; ?>

</body>

</html>