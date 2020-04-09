<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (preg_match('/^([0-9A-z\-]{1,})@([0-9A-z\-]{2,})\.([A-z]{2,6})$/i', $_POST['mail'])) {
        echo 'да';
    } else {
        echo 'нет';
    }

    // 1    '/.{1,}@.{2,}\.\D{2,6}/'
    // 2
    ?>
</body>

</html>