<?php
if (!($_POST['a']) || !($_POST['b'] || !($_POST['c']))) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/task1_4warning.html';
    return;
}
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

function writeArr($arr)
{
    echo "<hr><br>";
    echo "<pre>";
    print_r($arr);
    echo "<br><hr>";
}

writeArr($_POST);
function maxNum($a, $b, $c)
{
    if ($a > $b && $a > $c) {
        echo "<br>Большее из трех значений numberA = " . $a;
    } else if ($b > $a && $b > $c) {
        echo "<br>Большее из трех значений numberB = " . $b;
    } else if ($c > $a && $c > $b) {
        echo "<br>Большее из трех значений numberC = " . $c;
    }
}

maxNum($a, $b, $c);
function minNum($a, $b, $c)
{
    if ($a < $b && $a < $c) {
        echo "<br>Меньшее из трех значений numberA = " . $a;
    } else if ($b < $a && $b < $c) {
        echo "<br>Меньшее из трех значений numberB = " . $b;
    } else if ($c < $a && $c < $b) {
        echo "<br>Меньшее из трех значений numberC = " . $c;
    }
}

minNum($a, $b, $c);
function sum($a, $b, $c)
{
    $sum = $a + $b + $c;
    echo "<br>Сумма трех чисел равна " . $sum;
}

sum($a, $b, $c);

function average($a, $b, $c)
{
    $average = ($a + $b + $c) / 3;
    echo "<br>Среднее арифметическое введенных чисел равно " . $average;
}

average($a, $b, $c);

function multiple2($a, $b, $c)
{
    $quantity = 0;
    if ($a != 0 && ($a % 2) == 0) {
        $quantity++;
    }
    if ($b != 0 && ($b % 2) == 0) {
        $quantity++;
    }
    if ($c != 0 && ($c % 2) == 0) {
        $quantity++;
    }
    echo "<br>количество чисел кратных 2 => " . $quantity;
    unset($quantity);
}

multiple2($a, $b, $c);

function multiple3($a, $b, $c)
{
    $quantity = 0;
    if ($a != 0 && ($a % 3) == 0) {
        $quantity++;
    }
    if ($b != 0 && ($b % 3) == 0) {
        $quantity++;
    }
    if ($c != 0 && ($c % 3) == 0) {
        $quantity++;
    }
    echo "<br>количество чисел кратных 3 => " . $quantity;
    unset($quantity);
}

multiple3($a, $b, $c);

function isNull($a, $b, $c)
{
    $quantity = 0;
    if ($a == 0) {
        $quantity++;
    }
    if ($b == 0) {
        $quantity++;
    }
    if ($c == 0) {
        $quantity++;
    }
    echo "<br>количество чисел равных 0 => " . $quantity;
    unset($quantity);
}

isNull($a, $b, $c);

function multiple2_3($a, $b, $c)
{
    $quantity = 0;
    if ($a != 0 && ($a % 2) == 0 && ($a % 3) == 0) {
        $quantity++;
    }
    if ($b != 0 && ($b % 2) == 0 && ($b % 3) == 0) {
        $quantity++;
    }
    if ($c != 0 && ($c % 2) == 0 && ($c % 3) == 0) {
        $quantity++;
    }
    echo "<br>количество чисел кратных 2 и 3 => " . $quantity;
    unset($quantity);
}

multiple2_3($a, $b, $c);

function greaterThanA($a, $b, $c)
{
    $quantity = 0;
    if ($b > $a) {
        $quantity++;
    }
    if ($c > $a) {
        $quantity++;
    }
    echo "<br>количество чисел больше числа А => " . $quantity;
}

greaterThanA($a, $b, $c);
