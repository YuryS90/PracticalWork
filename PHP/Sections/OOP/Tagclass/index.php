<?php

declare(strict_types=1);

include 'autoload.php';

$a = new A(); // создали экземпляр класса А в переменную $a - объект

echo $a->clear() // вызываем метод clear()
    ->href('https:www.tut.by')
    ->innerText('tut.by')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();

echo "<br>";
// альтернатинвый синтаксис, если бы $this не возвращался

// echo $a->clear(); 
// $a->href('https:www.tut.by');
// $a->innerText('Текст');
// $a->class('btn');
// $a->id('b1');
// $a->style('color:red');
// $a->HTML();

// вторая ссылка
echo $a->clear()
    ->href('https:www.php.net')
    ->innerText('php.net')
    ->HTML();


echo "<br>"; // ===================================================


$h = new H(3); // можно тут указать уровень заголовка (от 1 до 6), тогда нужно закомментировать->level() и ->clear()

echo $h
    // ->clear()
    // ->level() // можно тут указать уровень заголовка (от 1 до 6)
    ->innerText('header')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();

    
echo "<br>"; // ===================================================


$table = new Table();
echo $table->clear()
    ->style('border: 1px solid black')
    ->data([
        [1, 2, 3],
        [4, 5, 6]
    ])
    ->html();
