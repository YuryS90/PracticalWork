<?php

include '../vendor/autoload.php';

// use App\Example\Calculator;

// $calculator = new Calculator();

// echo $calculator->setA(4)->setB(6)->sum();

use TexLab\MyDB\DbEntity;
use TexLab\MyDB\DB;

$link = DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'dbname' => 'guests_book'
]);

$table1 = new DbEntity('phonebook', $link);

echo json_encode($table1->get());