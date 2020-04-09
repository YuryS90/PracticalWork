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

    if (count($_POST) > 0) { // POST
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $dt = date("Y-m-d H:i:s");

        if (strlen($name) < 2) { // strlen принимает строку и говорит её длину и ставим это в условие, 2 - кол-во символов
            $msg = 'Попробуйте ещё раз. Ваше имя слишком короткое!';
        } elseif (strlen($phone) < 7) { //is_numeric - является ли введённое значение числом. А !is_numeric - это не число
            $msg = 'Мы не можем звонить на телефон короче 7 цифр';
        } elseif (!is_numeric($phone)) { //is_numeric - является ли введённое значение числом. А !is_numeric - это не число
            $msg = 'В поле телефон должны содержать цифры';
        } else {
            file_put_contents('apps.csv', "$dt $name $phone\n", FILE_APPEND);
            echo 'Ваша заявка принята, ожидайте звонка!';
        }

    } else { // GET
        $name = '';
        $phone = '';
        $msg = 'Заполните пустые поля!';
    }
    ?>

    <form method="POST">
        Имя<br>
        <input type="text" name="name" value="<?php echo $name; ?>"><br> <!-- name="name" это первый элемент массива, где name/phone - это ключи, а то, что будет введено - это будет значение -->
        Телефон<br>
        <input type="text" name="phone" value="<?php echo $phone; ?>"><br> <!-- name="phone" это второй элемент массива -->
        <input type="submit" value="Отправить">
    </form>

    <?php
    echo $msg;
    ?>

</body>

</html>