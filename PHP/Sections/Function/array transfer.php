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
    // Передача массива в фукцию 
    $input = array(2, 8);
    function takes_array($input)
    {
        echo '$input[0] + $input[1] = ', $input[0]+$input[1];
    }
    takes_array($input);

    ?>
</body>

</html>