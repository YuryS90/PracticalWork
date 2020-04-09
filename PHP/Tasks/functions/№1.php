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
 
    // №1 
    // Написать функцию, которую мы передаём в массив из чисел, 
    // а она возвращает этот же массив (такой же), но в нём все числа, умноженные на 2.
    function mul($arr) 
    {
        for ($i = 0; $i < count($arr); $i++) {
            $arr[$i] = $arr[$i]*2;  
        }
        return $arr;
    }
    print_r(mul([1,2,3,4]));

    ?>
</body>

</html>