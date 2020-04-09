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
 
 
    // №2
    // какое число больше из 2-х
    $a = 212;
    $b = 211;
    function num($a, $b)
    {
        if ($a > $b) {
            $c = $a;
        } else {
            $c = $b;
        }
        return $c;
    }
    echo num($a, $b);

    ?>
</body>

</html>