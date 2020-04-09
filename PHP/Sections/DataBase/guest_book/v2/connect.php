<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Не удалось соединиться с сервером");

mysqli_select_db($link, "guest_book")
    or die("Не удалось выбрать БД");

