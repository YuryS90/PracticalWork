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
    $handle = fopen("https://www.php.net/manual/ru/book.filesystem.php", "r");
    $contents = '';
    while(!feof($handle)) {
        $contents .= fread($handle, 1);
    }
    fclose($handle);
    echo $contents;
    
    ?>
</body>
</html>