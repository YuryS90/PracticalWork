<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$fp = $_GET['file'];
$new = explode(".", $fp)[0];

?>

    
<form action="ren.php" method="post">
    <input type="text" name="newname" value="<?=$new?>"> 
    <input value="<?=$_GET['file']?>" type="hidden" name="oldname" >
    
    <input type="submit" value="rename">
</form>

</body>
</html>
