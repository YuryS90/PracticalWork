<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include("fun.php");

    echo url_link(md(bb_code(smile(htmlspecialchars($_POST['smile'])))));

    // htmlspecialchars - чтобы пользователь не смог использовать html теги

    ?>
</body>

</html>