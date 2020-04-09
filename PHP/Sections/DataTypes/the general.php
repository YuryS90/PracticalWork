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
    $bool = true; // логический 
    $str = "foo"; // строковый
    $int = 12; // целочисленный

    echo gettype($bool); // выводит тип "boolen"
    echo "<br>";

    echo gettype($str); // выводит тип "string"
    echo "<br>";

    echo gettype($int); // выводит тип "integer"
    echo "<br>";

    // Если это целое, увеличть на 4
    if (is_int($int)) {
        $int += 4;
    }
    echo $int;
    echo "<br>";

    // Если $bool - это строка, вывести её 
    // (ничего не выводит из-за is_string($bool), где $bool - это логика, а не строка)
    if (is_string($bool)) {
        echo "Строка: $bool";
    }
    
    ?>



</body>

</html>