<?php

$site = file_get_contents($_POST['text']); // для того чтобы перебирались слова, если ввести какой-нибудь адрес

preg_match_all("/\w+/ui", $site, $match); // $match - получается массив в массиве,  u - поддержка русских слов

print_r($match[0]); // берём нулевой массив

foreach ($match[0] as $word) { //эта проверка считает сколько слов
    // print_r($word); // слова
    // echo "<br>";
    $arr[$word]++; // эти слова используются в качестве ключей в новом массиве $arr
}

arsort($arr);

// print_r($arr);   

foreach ($arr as $key => $value) { // сортирует
    echo $key . " - " .$value ."<br>"; 
}
