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
    $text = $_POST['text'];
    $name = $_POST['name'];
    $result = $name. ";" .$text. "\n";
    file_put_contents("data.csv", $result, FILE_APPEND);
    ?>
</body>
</html>