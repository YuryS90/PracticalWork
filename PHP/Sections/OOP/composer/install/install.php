<?php

require '../vendor/autoload.php';

use TexLab\MyDB\Runner;
use TexLab\MyDB\DB;


$runner = new Runner(DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'dbname' => ''
]));

foreach (explode(";", file_get_contents('guests_book.sql')) as $value) {
    $runner->runSQL($value . ";");
}
