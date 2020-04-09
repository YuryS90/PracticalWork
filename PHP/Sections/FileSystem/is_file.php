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
    if (is_file("file3.txt")) {
        echo "Это файл";
    } else {
        echo "Это не файл";
    }
    
    ?>
</body>
</html>