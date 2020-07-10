<?php
include 'autoload.php'; // для того чтобы могли использовать классы, которые лежат в htmlTag

function test($str1, $str2, $text='')
{
    if ($str1 == $str2) {
        echo "Тест $text пройден\n";
    } else {
        echo "Тест $text не пройден\n . $str1!=$str2\n";
    }
}


//======================================================================

$img = new Img();

test(
    "<img src='2.jpg'>",
    $img->setSrc('2.jpg')->html(),
    "Img"
);


echo "<br>";


test(
    "<img src='2.jpg' width='100' height='100' alt='img' border='2'>",
    $img->setSrc('2.jpg')->setWidth(100)->setHeight(100)->setAlt('img')->setBorder('2')->html(),
    "Img"
);

echo "<br>";

$br = new Br();

test(
    "<br clear='left'>",
    $br->html(),
    "Br"
);