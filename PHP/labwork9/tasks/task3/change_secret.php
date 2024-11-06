<?php
session_start();
?>

<h2>Изменение секретного слова</h2>
<form action="set_secret.php" method="GET">
    <label for="secret">Новое секретное слово:</label>
    <input type="text" id="secret" name="secret" required><br><br>
    <button type="submit">Изменить</button>
</form>