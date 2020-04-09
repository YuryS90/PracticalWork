<?php
// print_r($_GET); // ['file'] 
rmdir("file\\" . $_GET['file']); // удаляем папку
header("Location: show.php"); 
