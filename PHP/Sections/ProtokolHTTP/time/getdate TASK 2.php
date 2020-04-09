<?php

//2 способ
$day = getdate();

$arr = array(
    'Monday' => 'Понедельник',
    'Tuesday' => 'Вторник',
    'Wednesday' => 'Среда',
    'Thursday' => 'Четверг',
    'Friday' => 'Пятница',
    'Seturday' => 'Суббота',
    'Sunday' => 'Воскресенье',
);

echo $arr[$day['weekday']];
?>