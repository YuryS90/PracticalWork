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

    //№3                       1 способ
    // найти наибольшее число в массиве
    $array = array(10, 80, 100, 40, 50);

    function numb($array)
    {
        $max = $array[0];
        for ($i = 1; $i <= count($array); $i++) {
            if ($array[$i] > $max) {
                $max = $array[$i];
            }
        }
        return $max;
    }
    echo numb($array);



    ?>
</body>

</html>