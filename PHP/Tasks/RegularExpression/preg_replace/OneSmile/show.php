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

    $pattern = "/(\:\-\))|(\:\))/";
    $repSmile = "<img src='images/smiling.png' width='16' height='16'>";

    $result = preg_replace($pattern, $repSmile, $subject);
    echo $result;
    ?>
</body>

</html>