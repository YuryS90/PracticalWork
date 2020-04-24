<?php
session_start();
$_SESSION['count']++;
echo "Вы на этой странице уже <b>" . $_SESSION['count'] . "</b>-й раз."
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Обновить</a>
    <br><br>
    <a href="1.php">Начать новую сессию</a>
</body>
</html>