<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            border: 1px solid black;
            color: white;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .red {
            background-color: red;
        }

        .blue {
            background-color: blue;
        }

        .green {
            background-color: green;
        }

        .yellow {
            background-color: yellow;
        }
    </style>
</head>

<body>

    <?php
    
    $s = $_GET['a'] * $_GET['b'];
    $a = $_GET['a'];
    $b = $_GET['b'];

    if ($_GET['color'] == 'red') {
        echo "<div class = 'red' style = 'width: {$a}px; height: {$b}px'><p>S=$s</p></div>";
    } elseif ($_GET['color'] == 'blue') {
        echo "<div class = 'blue' style = 'width: {$a}px; height: {$b}px'><p>S=$s</p></div>";
    } elseif ($_GET['color'] == 'green') {
        echo "<div class = 'green' style = 'width: {$a}px; height: {$b}px'><p>S=$s</p></div>";
    } elseif ($_GET['color'] == 'yellow') {
        echo "<div class = 'yellow' style = 'width: {$a}px; height: {$b}px'><p>S=$s</p></div>";
    }


    ?>

</body>

</html>