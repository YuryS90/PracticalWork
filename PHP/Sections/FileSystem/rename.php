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
    $fp = fopen("file1.txt", "w+");
    fwrite($fp, "Test");
    fclose($fp);
    rename("file1.txt", "file3.txt");
    ?>
</body>
</html>