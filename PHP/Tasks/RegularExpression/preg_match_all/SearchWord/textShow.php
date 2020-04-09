<?php
$subject = file_get_contents($_POST['url']); // скачиваем страницу
$patt = $_POST['word']; // искомое слово, которое используем в качестве шаблона
echo preg_match_all("/$patt/i", $subject); // количество вхождений