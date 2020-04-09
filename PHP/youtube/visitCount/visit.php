<?php
$file = file('counter.txt');
$count = implode('', $file);
$count++;
$myFile = fopen('counter.txt', 'w');
fputs($myFile, $count);
fclose($myFile);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .eye span {
            position: relative;
            top: -4px;
        }
    </style>
</head>

<body>

    <div class="content">
        <p class="eye"><img src="eye.svg" width="20"> <span><?= $count ?></span></p>
    </div>

</body>

</html>