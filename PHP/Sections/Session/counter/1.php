<?php
session_start();
$_SESSION['count'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Сессия начата</h1> <br>
    <a href="2.php">Вторая страница</a>
</body>
</html>