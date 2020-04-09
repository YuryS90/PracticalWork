<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new php</title>
</head>

<body>

    <?php

    $a = 5;       // 2h 30min
    $b = 4;
    if ($a > $b)
        echo "a больше чем b";

    echo "<br>";


    if ($a > $b) {
        echo "a больше, чем b";
        $b = $a;
    }

    echo "<br>";







    $a = 4;
    $b = 5;
    if ($a > $b) {
        echo "a is greater than b";
    } else {
        echo "a is NOT greater than b";
    }

    echo "<br>";


    ?>
    <!-- альтернативный 10.01.2020-->

    <?php
    $a = 5;
    if ($a == 5) : ?>
        A is equal to 5
    <?php endif;
    echo "<br>";
    ?>

    <!-- обычный  -->
    <?php
    $a = 5;
    if ($a == 5) { ?>
        A is equal to 5
    <?php };
    echo "<br>";
    ?>

    <!-- обычный с echo -->
    <?php
    $a = 5;
    if ($a == 5) {
        echo "A is equal to 5";
    }
    echo "<br>";
    ?>

    <!-- for -->


    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>"; // точка это + для строк
    }
    //  echo $i; 

    echo "<br>";

    for ($i = 1;; $i++) {
        if ($i > 10) {
            break; // прерывает бесконечность
        }
        echo $i;
    }

    echo "<br>";


    // аналогично предыдущего примера
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break; // прерывает бесконечность
        }
        echo $i;
        $i++;
    }

    echo "<br>";


    
    // алгоритм 1 способ
    $s = 0;
    for ($i = 1; $i <= 10; $i++) {
        $s = $s + $i;
    }
    echo $s; 

    echo "<br>";

    // алгоритм 2 способ
    $s = 0;
    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        $s = $s + $i; 
        // echo $s; // выводит сумму 1 цикла, и так все 10 циклов
    }
    echo $s; // выводит сумму всех 10 циклов 

    echo "<br>";



    // foreach
    $arr = array("one", "two", "three");

    foreach ($arr as $value) {
        echo "Value: $value<br />\n";
    }

    echo "<br>";

    $arr = array("one", "two", "three");

    foreach ($arr as $key => $value) {
        echo "Key: $key; Value: $value<br />\n";
        // echo "Key: " . $key . "; " . "Value: " . $value . "<br>";   // можно и так
    }
    echo "<br>";

    // сумма всех чисел в массиве
    $s = 0; // начальное значение 
    $arr = array(1, 2, 3, 4); // 4 цикла 
    foreach ($arr as $value) { 
        $s = $s + $value;
    }
    echo $s;  // равно 10
    echo "<br>";



    // while   
    // пример 1  
    $i = 1;
    while ($i <= 10) {
        echo $i++;
    }
    echo "<br>";

    // альтернативный пример 2  
    $i = 1;
    while ($i <= 10) :
        echo $i;
        $i++;
    endwhile;
    echo "<br>";

    $i = 1; // самостоятельный пример из схемы на доске
    $s = 0;
    while ($i <= 10) {
        $s = $s + $i;
        $i = $i + 1;
    }
    echo $s;
    echo "<br>";

    // do-while
    $i = 0;
    do {
        echo $i;
    } while ($i > 10);
    echo "<br>";


    // самостоятельный пример суммы чисел
    $i = 1; 
    $s = 0; // сумма начинается с 0
    do {
        $s = $s + $i;
        $i++;
    } while ($i <= 10);

    echo $s;
    echo "<br>";

    $i = 3; // самостоятельный пример 
    $p = 1; // произведение начинается с 1
    do {
        $p = $p * ($i**2);
        $i++;
    } while ($i <= 12);

    echo $p;
    echo "<br>";


    // switch
    $i = 5;
    switch ($i) {
        case 4:
            echo 4;
            break;
        case 5:
            echo 5;
            break;
        default:
            echo "\$i=$i";
    }
    echo "<br>";

    // переменная равна какому-то числу, взависимости от того чему оно равно, задать числа в диапозоне от 0 до 9
    $i = 15;
    switch ($i) {
        case 0:
            echo "ноль";
            break;
        case 1:
            echo "один";
            break;
        case 2:
            echo "два";
            break;
        case 3:
            echo "три";
            break;
        case 4:
            echo "четыре";
            break;
        case 5:
            echo "пять";
            break;
        case 6:
            echo "шесть";
            break;
        case 7:
            echo "семь";
            break;
        case 8:
            echo "восемь";
            break;
        case 9:
            echo "девять";
            break;
        default:
            echo "нет такой цифры";
    }
    echo "<br>";




    ?>

</body>

</html>