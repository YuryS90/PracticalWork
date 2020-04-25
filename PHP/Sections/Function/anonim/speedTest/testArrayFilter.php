<pre>
<?php
function speed_test($fun, $arg, $n = 100000)
{

    $time1 = microtime(TRUE);

    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }

    $time2 = microtime(TRUE);

    return $time2 - $time1;
}

$a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);

function testFilter($array)
{
    return array_filter($array, function ($x) {
        return $x >= 0;
    });
}

function testForeach($array)
{
    $a = [];
    foreach ($array as $value) {
        $a[] = $value >= $value;
    }
    return $a;
};


function testFor($array)
{
    $a = [];
    for ($i = 0; $i < count($array); $i++) {
        $a[] = $array[$i] >= $array[$i];
    }
    return $a;
}


function testWhile($array)
{
    $a = [];
    $i = 0;
    while ($i < count($array)) {
        $a[] = $array[$i] >= $array[$i];
        $i++;
    }
    return $a;
}

echo speed_test('testFilter', $a1); 
echo "<br>";
echo speed_test('testForeach', $a1); // самый быстрый
echo "<br>";
echo speed_test('testFor', $a1);
echo "<br>";
echo speed_test('testWhile', $a1);
?>
</pre>