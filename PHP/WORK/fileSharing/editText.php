<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="text.php" method="post">

        <textarea name="text" cols="30" rows="25">
            <?=htmlspecialchars(file_get_contents("file/$_GET[file]"))?> <!--изменённый исходный файл -->
        </textarea>

        <input type="hidden" name="file" value="<?= $_GET['file'] ?>"> <!--исходный файл -->

        <div>

            <form action="show.php" method="GET">
                <input type="submit" value="Назад">
            </form>

            <input type="submit" value="Редактировать">

        </div>

    </form>




</body>

</html>