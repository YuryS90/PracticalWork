<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $str = "Всем <b>Привет</b> !!!";

    $pat = "/<b>.*<\/b>/i";
    $rep = "<i>$0</i>";

    $str2 = preg_replace($pat, $rep, $str);
    echo $str2;
    ?>
</body>
</html>