<?php


function age($x)
{
    $age = $x / 365;

    if ($age > 150) {
        throw new Exception('Таких людей не бывает, возраст = '. $age);
    }

    return $age;
}

try {
    echo age(400000);
} catch (Exception $e) {
    echo " Поймано исключение: ", $e->getMessage(), "\n";
}