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

    $a = $_POST['voting'];

    $arr = explode(";", file_get_contents("counter.csv")); 
    $arr[$a]++;
    file_put_contents("counter.csv", implode(";", $arr));
    
    foreach ($arr as $key => $value) {
        echo "$key - $value<br>";
    }

    ?>

</body>

</html>