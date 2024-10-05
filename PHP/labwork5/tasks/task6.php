<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $string = "скоро надо будет писать диплом";

    $firstSpacePos = strpos($string, " ");
    $secondSpacePos = strpos($string, " ", $firstSpacePos + 1);

    echo "Позиция второго пробела: $secondSpacePos<br>";
    
    $string = rtrim($string, "!") . "!";

    echo $string . "<br>";

    //Дана строка произвольной длины (больше 100 символов). Нужно получить строку размером 100 символов. Если последнее слово обрезалось, то удалить его полностью. В конце строки дожно быть 3 точки.

    $str = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo eum dolorem quia nesciunt voluptates ullam saepe dicta, rerum nam iste sed recusandae beatae amet numquam magni temporibus eos sapiente ex.";

    if(strlen($str) > 100){
        $str = substr($str, 0, 100);

        $arr = explode(" ", $str);

        array_pop($arr);

        $str = implode(" ", $arr) . '...';

        echo $str;
    }
    ?>
</body>

</html>