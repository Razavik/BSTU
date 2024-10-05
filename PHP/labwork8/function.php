<?php
// Задача 1
function my_dump($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}



// Задача 2
function randomList($length)
{
    $arr = [];
    for ($i = 0; $i < $length; $i++) {
        $arr[] = rand(-99, 99);
    }
    return $arr;
}

function summList($array)
{
    $sum = 0;
    foreach ($array as $item) {
        if ($item % 2 == 0) {
            $sum += $item;
        }
    }
    return $sum;
}



// Задача 3
function generatePassword($length, $useLetters = true, $useNumbers = true, $useSpecialChars = true)
{
    $characters = '';
    if ($useLetters) {
        $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($useNumbers) {
        $characters .= '0123456789';
    }
    if ($useSpecialChars) {
        $characters .= '!@#$%^&*()_+-=';
    }
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}



// Задача 4
function callTwice($func)
{
    return function () use ($func) {
        $func();
        $func();
    };
}



// Задача 5
function getPrimes($number)
{
    $primes = [];
    for ($i = 2; $i <= $number; $i++) {
        $isPrime = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $primes[] = $i;
        }
    }
    return $primes;
}



// Задача 6
function formatDate($date)
{
    $timestamp = strtotime($date);
    if ($timestamp === false) {
        return "Неверная дата";
    }
    return date('d.m.Y', $timestamp);
}



// Задача 7
function charFrequency($string)
{
    $frequency = [];
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if (!isset($frequency[$char])) {
            $frequency[$char] = 0;
        }
        $frequency[$char]++;
    }
    return $frequency;
}



// Задача 8
function createMenuFiles()
{
    $menu1 = ["Суп", "Борщ", "Окрошка"];
    $menu2 = ["Котлета", "Стейк", "Рыба"];
    $menu3 = ["Торт", "Мороженое", "Пирог"];

    file_put_contents('menu1.txt', implode("\n", $menu1));
    file_put_contents('menu2.txt', implode("\n", $menu2));
    file_put_contents('menu3.txt', implode("\n", $menu3));

    echo "Файлы меню созданы.\n";
}

function generateMenu()
{
    if (!file_exists('menu1.txt') || !file_exists('menu2.txt') || !file_exists('menu3.txt')) {
        createMenuFiles();
    }

    $first = @file('menu1.txt');
    $second = @file('menu2.txt');
    $dessert = @file('menu3.txt');

    if ($first === false || $second === false || $dessert === false) {
        echo "Ошибка: Один или несколько файлов меню не найдены.";
        return false;
    }

    $todayMenu = [
        'Первое' => trim($first[array_rand($first)]),
        'Второе' => trim($second[array_rand($second)]),
        'Десерт' => trim($dessert[array_rand($dessert)])
    ];

    file_put_contents('today.txt', implode("\n", $todayMenu));

    return $todayMenu;
}



// Задача 9
function my_click()
{
    $dateTime = date('Y-m-d H:i:s');
    file_put_contents('time.txt', "Кнопка нажата: $dateTime\n", FILE_APPEND);
}
?>