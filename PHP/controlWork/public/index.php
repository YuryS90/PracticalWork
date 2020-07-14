<?php

use Core\Calc;

include "../vendor/autoload.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> 
    
    <form action="?" method="POST">
        <input type="text" name="a">

        <select name="op">
            <option value="sum">+</option>
            <option value="mul">*</option>
            <option value="dif">-</option>
            <option value="div">/</option>
        </select>

        <input type="text" name="b">

        <input type="submit" value="Равно">
    </form>
    <?php
    if (!empty($_POST)) {
        echo (new Calc($_POST['a'], $_POST['b']))->{$_POST['op']}();
    } 

    // (new Calc($_POST['a'], $_POST['b'])) - это объект
    ?>

    
</body>

</html>
