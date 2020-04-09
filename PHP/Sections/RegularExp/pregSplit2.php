<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $str = 'hypertext3language5programming';
    $chars = preg_split('/\d/', $str);
    print_r($chars);

    ?>
</body>
</html>