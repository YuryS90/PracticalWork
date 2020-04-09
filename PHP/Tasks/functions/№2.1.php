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
 
    // №2.1
    // какое число больше из 3-х
    $a = -50;
    $b = 503;
    $c = -504;
    function numr($a, $b, $c)
    {
        if ($a > $b) { //если ДА, то...
            $buf = $a; //...делается это 
        } else { //иначе НЕТ,то...
            $buf = $b; //...делается это 
        }
        if ($buf < $c) {
            $buf = $c;
        }           
        return $buf;
    }
    echo numr($a, $b, $c);

    ?>
</body>

</html>