<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new php</title>
</head>

<body>

    <?php

    $arr = array(5 => 43, 32, 56, "b" => 12);

    unset($arr);  //Это удаляет массива полностью
    print_r($arr);

    ?>

</body>

</html>