<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mainStr = "Привет мир! Меня зовут Даниил!";
    $subStr = "мир";
    $indexSubStr = mb_strpos($mainStr, $subStr);

    if ($indexSubStr !== false){
        $indexAfterSubStr = $indexSubStr + mb_strlen($subStr);
        echo mb_substr($mainStr, $indexSubStr - 2, 2) . $subStr . mb_substr($mainStr, $indexAfterSubStr, 4);
    }else{
        echo "Строка не найдена!";
    }
    
    ?>
</body>

</html>