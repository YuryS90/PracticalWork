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
 
    // №2.2
    // какое число больше из 4-х

    $a = 40;
    $b = 10;
    $c = 15;
    $d = 18;

    function number($a, $b, $c, $d)
    {
        if ($a > $b) {
            $max = $a;
        } else {
            $max = $b;
        }

        if ($c > $d) {
            $max2 = $c;
        } else {
            $max2 = $d;
        }

        if ($max < $max2) {
            $max = $max2;
        }
        return $max;
    }

    echo number($a, $b, $c, $d);

    ?>
</body>

</html>