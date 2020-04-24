<?php

declare(strict_types=1);

include 'autoload.php';

$a = new A();

echo $a->clear()
    ->href('https:www.tut.by')
    ->innerText('Текст')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();
