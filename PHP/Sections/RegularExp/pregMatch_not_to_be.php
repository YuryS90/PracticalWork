<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $str = "not to be";
    $pat = "/(^be$)|(^not\sto\sbe$)/i";
    
    if (preg_match($pat, $str)) {
        echo "Вхождение найдено";
    } else {
        echo "Вхождение не найдено";
    }

    ?>
</body>
</html>