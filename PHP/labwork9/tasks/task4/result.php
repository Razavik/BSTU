<?php
session_start();

if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {
    $_SESSION['user'] = [
        'name' => $_GET['name'],
        'age' => $_GET['age'],
        'time' => date('Y-m-d H:i:s')
    ];

    $gender = $_GET['gender'];
    $image = $gender == 'male' ? 'https://img.freepik.com/free-photo/portrait-of-handsome-bearded-man-outside_23-2150266915.jpg' : 'https://vakhitova.ru/content/images/size/w770/2020/03/--------------2020-03-26---14.03.54.png'; // Добавьте изображения "male.jpg" и "female.jpg"

    echo "<h2>Имя: " . $_SESSION['user']['name'] . "</h2>";
    echo "<h2>Возраст: " . $_SESSION['user']['age'] . "</h2>";
    echo "<img src='$image' alt='Изображение' width='200'><br>";

    echo "<br><a href='session_data.php'>Показать данные из сессии</a>";
}
?>