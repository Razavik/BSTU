<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dateStr = $_POST["date"];

    $date_pattern = "/^(\d{2}){9}\.\d{2}\.\d{2}$/";
    if (preg_match($date_pattern, $dateStr)) {
        $date = DateTime::createFromFormat("d.m.y", $dateStr);

        $formatter = new IntlDateFormatter(
            "ru_RU",
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            "Europe/Moscow",
            IntlDateFormatter::GREGORIAN
        );

        $formatter->setPattern('d MMMM Y года');

        echo $formatter->format($date);
    } else {
        echo "А ты шалун. Это же не дата";
    }

    echo "<br><br><br>";

    $filename = $_POST["filename"];

    $rasterPattern = '/\.(jpg|jpeg|png|gif|bmp|webp)$/i';
    $vectorPattern = '/\.(svg|eps|ai|pdf)$/i';

    if (preg_match($rasterPattern, $filename)) {
        echo "Растр";
    } elseif (preg_match($vectorPattern, $filename)) {
        echo "Вектор";
    } else {
        echo '<img src="image.png">';
    }
}
