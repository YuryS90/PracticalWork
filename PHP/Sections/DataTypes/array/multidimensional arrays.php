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

    // многомерные массивы

    $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

    echo $arr["somearray"][6]; // 5
    echo "<br>";
    echo $arr["somearray"][13]; // 9
    echo "<br>";
    echo $arr["somearray"]["a"]; // 42
    
    ?>

</body>

</html>