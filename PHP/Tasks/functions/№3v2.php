<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    // №3                        2 способ
    //найти наибольшее число в массиве
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

    ?>
</body>

</html>