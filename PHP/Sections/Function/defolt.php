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
    function makecoffe($type = "cappuccino")
    {
        return "Making a cup of $type. \n";
    }
    echo makecoffe();
    echo makecoffe("espresso");

    ?>
</body>

</html>