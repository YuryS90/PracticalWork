<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>123</title>
</head>

<body>

    <?php
    include("fun_guest_book.php");

    save_guest_book("book.xml", $_POST['mess'], $_POST['name'], date('d-m-y h:i:s'));

    $arr = read_guest_book("book.xml");
    
    foreach ($arr as $value) {
        echo $value['name'] . "  " . $value['date'] . "<br>" . $value['text'] . "<br>";
    }
    
    

    ?>

    <form action="?" method="POST">
        <textarea name="mess" cols="30" rows="10"></textarea>
        <br>
        <input type="text" name="name">
        <br>
        <input type="submit" value="ok">
    </form>

</body>

</html>