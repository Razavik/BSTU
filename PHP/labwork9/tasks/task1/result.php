<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $languages = isset($_POST['languages']) ? implode(", ", $_POST['languages']) : 'Не выбрано';
    $experience = $_POST['experience'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    echo "<h2>Результаты анкеты:</h2>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Дата рождения:</strong> $date</p>";
    echo "<p><strong>Пол:</strong> $gender</p>";
    echo "<p><strong>Знание языков программирования:</strong> $languages</p>";
    echo "<p><strong>Опыт работы в IT:</strong> $experience</p>";
    echo "<p><strong>Имя:</strong> $name</p>";
    echo "<p><strong>Телефон:</strong> $phone</p>";
    echo "<p><strong>Комментарии:</strong> $comment</p>";
}
?>