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


    $a = "ПРИВЕТ МИР";
    $a = mb_strtolower($a);
    echo $a;
    echo "<br>";

    $b = "привет мир";
    $b = mb_strtoupper($b);
    echo $b;
    echo "<br>";

    $c = "привет мир";
    $c = ucfirst($c);
    echo $c;


    ?>

</body>

</html>