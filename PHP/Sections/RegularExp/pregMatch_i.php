<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (preg_match("/php/i", "PHP is programming language.")) { // зарешал модификатор i
        echo "Вхождение найдено.";
    }
    else {
        echo "Вхождение не найдено.";
    }
    ?>
</body>
</html>