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

    // этот массив эквивалентен...
    $arr = array(5 => 43, 32, 56, "b" => 12);
    echo $arr[5];
    echo "<br>";
    echo $arr[6];
    echo "<br>";
    echo $arr[7];
    echo "<br>";
    echo $arr["b"];
    echo "<br>";
    print_r($arr);
    echo "<br>";


    // ...этому массиву
    array(5 => 43, 6 => 32, 7 => 56, "b" => 12);

    // echo "<pre>";
    print_r($arr);
    echo "<br>";


    $arr = array(5 => 1, 12 => 2);

    $arr[] = 56; // В этом месте скрипта это эквивалентно $arr[13] = 56;
    print_r($arr);
    echo "<br>";

    $arr["x"] = 42; // Это добавляет к массиву новый элемент с ключом "x"
    print_r($arr);
    echo "<br>";

    ?>

</body>

</html>