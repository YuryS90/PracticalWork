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

    $p = $_POST['num1'] * $_POST['num2']; // перемножило... 
    echo $p; // ... и ответ вывело на экран

    $result = $_POST['num1']."*".$_POST['num2']."=".$p."\n"; 
    file_put_contents("calc.txt", $result, FILE_APPEND);  
   

    ?>

</body>

</html>