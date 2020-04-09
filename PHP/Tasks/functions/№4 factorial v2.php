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

    // задача на факториал c рекурсией
    function fact($n)
    {
        if ($n == 0) {
            $f = 1;
        } else {
            $f = fact($n - 1) * $n;
        }
        return $f;
    }
    echo fact(0);
    echo "<br>";
    echo fact(1);
    echo "<br>";
    echo fact(2);
    echo "<br>";
    echo fact(3);
    echo "<br>";
    echo fact(4);
    echo "<br>";
    echo fact(5);
    ?>
</body>

</html>