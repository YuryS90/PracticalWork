<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Калькулятор</h1>
    
    <form action="calc.php" method="POST">

        <input type="text" name="a">

        <select name="op">
            <option value="sum">+</option>
            <option value="mul">*</option>
            <option value="dif">-</option>
            <option value="div">/</option>
        </select>

        <input type="text" name="b">

        <input type="submit" value="ok">
    </form>

</body>
</html> 