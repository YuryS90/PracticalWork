<?php
// print_r($_GET); // ['file'] 
unlink("file\\" . $_GET['file']); // удаляем файл
header("Location: show.php"); 
