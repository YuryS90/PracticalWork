<?php
// аргумент
$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

//замерка производительности array_map & foreach & for
function speed_test($fun, $arg, $n = 100000)
{

    $time1 = microtime(true);

    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }

    $time2 = microtime(true);

    return $time2 - $time1;
}

function test1($array)
{
    return array_map(function ($x) {
        return $x * $x;
    }, $array);
}

function test2($array) // самый быстрый
{
    $a = [];
    foreach ($array as $value) {
        $a[] = $value * $value;
    }
    return $a;
}

function test3($array)
{
    $a = [];
    for ($i = 0; $i < count($array); $i++) {
        $a[] = $array[$i] * $array[$i];
    }
    return $a;
}

echo speed_test("test1", $a1);
echo "<br>";
echo speed_test("test2", $a1);
echo "<br>";
echo speed_test("test3", $a1);