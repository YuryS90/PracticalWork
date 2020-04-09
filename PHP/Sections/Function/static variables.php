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
    function Test()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
    Test();
    echo $a;
    echo "<br>";
    Test();
    echo $a;
    echo "<br>";
    Test();
    echo $a;
    ?>
</body>

</html>