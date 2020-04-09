<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $subject = $_POST['smile'];

    $arrPat = [
        "/(\:\-\))|(\:\))/",
        "/(\:\-\()|(\:\()/"
    ];

    $arrRep = [
        "<img src='images/smiling.png' width='16' height='16'>",
        "<img src='images/sad.png' width='16' height='16'>"
    ];

    $str2 = preg_replace($arrPat, $arrRep, $subject);
    echo $str2;
    ?>
</body>

</html>