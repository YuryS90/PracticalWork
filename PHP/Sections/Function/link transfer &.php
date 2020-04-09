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
    function plus(&$string) // данная переменная связывается с переменной $str
    {
        $string .= ' + Pet9';
    }
    $str = 'Ira';
    plus($str);
    echo $str;

    ?>
</body>

</html>