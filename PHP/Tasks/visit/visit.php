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
    // классический

    $file = "counter.txt"; 
    $c = fopen($file, 'r+'); 
    $counter = fgets($c); 
    fclose($c);  
    echo $counter += 1; 

    $c = fopen($file, 'w+'); 
    fwrite($c, $counter);
    fclose($c);  


    // сокращённый в 3 строчки

    // $c = file_get_contents("counter.txt");
    // echo $c++;
    // file_put_contents("counter.txt", $c);


    // в 2 строчки
    
    // echo $c = file_get_contents("counter.txt") +1;
    // file_put_contents("counter.txt", $c);

    


    ?>

</body>

</html>