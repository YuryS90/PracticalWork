<?php
include("connect.php");

if (!empty($_POST['text'] && !empty($_POST['name']))) {
    mysqli_query(
        $link,
        "INSERT INTO book VALUES(NULL, '$_POST[text]', '$_POST[name]')"
    );
};

mysqli_close($link);

header('Location: form_book.php');
