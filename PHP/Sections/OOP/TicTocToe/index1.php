<?php
include 'autoload.php';

$tic = new Tictac();
// $tic->initMap(3); // раз в конструкторе вызывается метод initMap, то эта запись не нужна
print_r($tic->map);

// $tic->putCross(0, 0);



//$tic->putNull(1, 0);

//$rand = new Random();

//$tic->putRandCross();
//$tic->putRandNull();

// $area = new Area();

// echo $area
//     ->style('1px solid black', '100px', '100px')
//     ->setMap($tic->map)
//     ->html();