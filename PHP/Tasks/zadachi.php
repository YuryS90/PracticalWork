<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>

<body>

    <?php
    // №1

    // $a = 10;
    // $b = 7;
    // $c = 20;
    // $d = 30;
    // $e = 9;
    // if ($a > $b && $a > $c && $a > $d && $a > $e) {
    //     echo "A the largest number";
    // } elseif ($b > $a && $b > $c && $b > $d && $b > $e) {
    //     echo "B the largest number";
    // } elseif ($c > $a && $c > $b && $c > $d && $c > $e) {
    //     echo "C the largest number";
    // } elseif ($d > $a && $d > $b && $d > $c && $d > $e) {
    //     echo "D the largest number";
    // } elseif ($e > $a && $e > $b && $e > $c && $e > $d) {
    //     echo "E the largest number";
    // }




    // №2 Написать скрипт рассчитывающую Сумму на банковском вкладе через заданное количество месяцев. Входные данные:
    //Начальная сумма вклада
    //Количество месяцев
    //Годовая процентная ставка

    // 1 способ
    // $money = 100;
    // $month = 12;
    // $interestYear = 12;

    // for ($i = 1; $i <= $month; $i++) {
    //     $money = $money + ($money * ($interestYear / 12 / 100));
    //     // echo $money . "<br>";
    // }
    // echo $money;

    // 2 способ
    // $i = 1;
    // while ($i <= $month) {
    //     $money = $money + ($money * ($interestYear / 12 / 100));
    //     $i++;
    // }
    // echo $money;

    // 3 способ
    // $i = 1;
    // do {
    //     $money = $money + ($money * ($interestYear / 12 / 100));
    //     $i++;
    // } while ($i <= $month);
    // echo $money;



    //№3 Написать функцию принимающую на вход массив чисел произвольной длинны. 
    // В результате работы функция должна возвращать наибольшее значение из массива.

    function numbr($arr)
    {
        reset($arr);
        $max = current($arr);
        foreach ($arr as $v) {
            if ($v > $max)
                $max = $v;
        }
        return $max;
    }
    echo numbr([200, 1000, 2, 4, 400, 2400]);
    echo "<br>";
    echo numbr([-200, -1000, -2, -4, -400, -2400]);
    echo "<br>";
    echo numbr([4 => 200, 5 => 1000, 2, 4, 400, 2400]);
    echo "<br>";




    //№4 Фибоначчи
    function fibon($n)
    {
        $f = [0, 1];
        for ($i = 1; $i < $n; $i++) {
            $f[] = $f[$i] + $f[$i - 1];
        }
        return $f;
    }

    echo "<pre>";
    print_r(fibon(5));

    ?>

</body>

</html>