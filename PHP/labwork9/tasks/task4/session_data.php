<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "<h2>Данные из сессии:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Имя</th><th>Возраст</th><th>Время</th></tr>";
    echo "<tr><td>" . $_SESSION['user']['name'] . "</td><td>" . $_SESSION['user']['age'] . "</td><td>" . $_SESSION['user']['time'] . "</td></tr>";
    echo "</table>";
} else {
    echo "<h2>Данные не найдены в сессии.</h2>";
}
?>