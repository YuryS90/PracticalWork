<?php



// Эта функция записывает в файл .xml то что введёт пользователь в виде $xml

function save_guest_book($file, $text, $name, $date)
{

    $xml = "<msg><text>$text</text><name>$name</name><date>$date</date></msg>";

    return file_put_contents($file, $xml, FILE_APPEND);
}





function read_guest_book($file)
{
    $string = file_get_contents($file); // читаем из файла .xml строку
    preg_match_all("/<text>(.*?)<\/text><name>(.*?)<\/name><date>(.*?)<\/date>/ui", $string, $arr_tags); // вытаскиваем данные из xml-тегов
    print_r($arr_tags);
    $arr_guests_book = [];

    foreach ($arr_tags[1] as $key => $value) {  // формируем
        $arr_guests_book[$key]['text'] = $value;
        $arr_guests_book[$key]['name'] = $arr_tags[2][$key];
        $arr_guests_book[$key]['date'] = $arr_tags[3][$key];
    }

    return $arr_guests_book;
}
