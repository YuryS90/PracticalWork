<?php
// print_r($_POST);
include("Calculator.php");

$calc = new Calculator(
    $_POST['a'],
    $_POST['b']
);
// echo $calc->sum(); // будет работать только ОДНА функция (метод) сумма
echo $calc->{$_POST['op']}(); // засчёт {} и ор будет работать ВСЕ методы
