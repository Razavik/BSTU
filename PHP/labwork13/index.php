<?php
session_start();

function generateCaptcha()
{
    $width = 200;
    $height = 80;

    $image = imagecreatetruecolor($width, $height);

    $backgroundColor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $backgroundColor);

    $numLines = rand(5, 10);
    for ($i = 0; $i < $numLines; $i++) {
        $lineColor = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
        imageline($image, rand(0, $width), rand(0, $height), rand(0, $width), rand(0, $height), $lineColor);
    }

    $captchaText = '';
    for ($i = 0; $i < 5; $i++) {
        $captchaText .= rand(0, 9);
    }

    $_SESSION['captcha'] = $captchaText;

    for ($i = 0; $i < strlen($captchaText); $i++) {
        $textColor = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
        $x = 30 + $i * 30 + rand(-5, 5);
        $y = rand(20, 50);
        imagestring($image, rand(3, 5), $x, $y, $captchaText[$i], $textColor);
    }

    header('Content-Type: image/png');
    imagepng($image);
    imagedestroy($image);
}

if (isset($_GET['action']) && $_GET['action'] == 'captcha') {
    generateCaptcha();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['captcha_input']) && $_POST['captcha_input'] == $_SESSION['captcha']) {
        $result = "Капча введена верно!";
    } else {
        $result = "Неверная капча!";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Капча</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .captcha-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .captcha-image {
            margin: 20px 0;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="captcha-container">
        <h2>Капча</h2>

        <div class="captcha-image">
            <img src="?action=captcha" alt="captcha">
        </div>

        <form method="POST">
            <input type="text" name="captcha_input" placeholder="Введите капчу" required>
            <br>
            <button type="submit">Проверить</button>
        </form>

        <button onclick="window.location.reload();">Обновить капчу</button>

        <?php if (isset($result)): ?>
            <div class="result"><?= $result ?></div>
        <?php endif; ?>
    </div>

</body>

</html>