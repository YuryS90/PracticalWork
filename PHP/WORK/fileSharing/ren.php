<?php

$oldName = $_POST['oldname']; // передалась старое название data.csv при помощи type="hidden" 
// print_r($oldName);
// echo "<br>";

$fpOld = explode(".", $oldName); // [0]=>data [1]=>csv
// print_r($fpOld);
// echo "<br>";

$fpNew = [$_POST["newname"], $fpOld[1]]; // data, csv
// print_r($fpNew);
// echo "<br>";

$newName = implode(".", $fpNew); // data.csv
// print_r($newName );
// echo "<br>";

rename("file/$oldName", "file/$newName");

header("Location: show.php");
