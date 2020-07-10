<?php
error_reporting(E_ALL ^ E_DEPRECATED); // показывает все ошибки кроме DEPRECATED 

include 'autoload.php';

$b = new B('papapa'); // чтобы в () не вписывать параметр, то в __construct делаем знач по умолчнию (пустая строка). 
//И тогда параметр (Hello World) прописываем сюда ->setInnerText('Hello World')
// если по умолчнию не делать, то нужно ОБЯЗАТЕЛЬНО в new B прописывать параметр в () и метод setInnerText будет не нужен!

echo $b
    ->setInnerText('Hello World') // "Сюда" 
    ->setClass("color")
    ->setId("12345")
    ->html();


echo "\n<br>\n"; // ===============================================


$i = new I();

echo $i
    ->setInnerText('Hello World')
    ->html();


echo "\n<br>\n"; // ===============================================


$u = new U();

echo $u
    ->setInnerText('Hello World')
    ->html();


echo "\n<br>\n"; // ===============================================


$ul = new Ul();

echo $ul
    ->setId('sp2')
    ->setInnerData([1, 2, 3])
    ->setType("circle123")
    ->html();


echo "\n<br>\n"; // ===============================================


$ol = new Ol();

echo $ol
    ->setId('sp2')
    ->setInnerData(["a", "b", "c"])
    ->setType("I")
    ->html();


echo "\n<br>\n"; // ===============================================


$select = new Select();

echo $select
    ->setId('id1')
    ->setName('select')
    ->setInnerData([
        "mul" => "*",
        "div" => "/",
        "plus" => "+",
        "minus" => "-"
    ])
    ->html();


echo "\n<br>\n"; // ===============================================

//Пример №1
$input = new Input();

echo $input
    ->setType('text')
    ->setValue('')
    ->setName('name')
    ->html();


echo "\n<br>\n"; // ===============================================

//Пример №2 (два в одном - setValueType)
$input = new Input();

echo $input
    ->setValueType(['password' => 'ok'])
    ->setName('name')
    ->html();


echo "\n<br>\n"; // ===============================================

//Пример №1
$form = new Form();

echo $form
    ->setAction('1.php')
    ->setInnerText((new Input())->setName('name')->setValue('Admin')->html() .
        (new Input())->setType('password')->setName('pass')->setValue('123')->html() .
        (new Input())->setType('submit')->setValue('okey')->html())
    ->html();


echo "\n<br>\n"; // ===============================================

//Примере №2 

echo $form
    ->setAction('1.php')
    ->addInnerText((new Input())->setName('num1')->setValue(12)->html()) //из-за того, что закачивается методом html(), поэтому addInnerText (string)
    ->addInnerText((new Select())->setName('op')
        ->setInnerData([
            "mul" => "*",
            "div" => "/",
            "plus" => "+",
            "minus" => "-"
        ])
        ->html())
    ->addInnerText((new Input())->setName('num2')->setValue(12)->html())
    ->addInnerText((new Input())->setType('submit')->setValue('okey')->html())
    ->html();


echo "\n<br>\n"; // ===============================================


$img = new Img();

echo $img
    ->setSrc("1.jpg")
    ->setWidth(140)
    ->setHeight(240)
    ->setBorder(2)
    ->html();


// echo "\n<br>\n"; // ===============================================


$br = new Br();

echo $br->html();


echo $img
    ->setSrc("1.jpg")
    ->setWidth(140)
    ->setHeight(240)
    ->setBorder(2)
    ->html();

// $button = new Button();

// echo $button
//     ->setName("button")
//     ->settype('submit')
//     ->setInnerText('ok')
//     ->html();

// echo "<br>";

// $textarea= new TextArea();

// echo $textarea
//     ->setName('textarea')
//     ->setId('123')
//     ->setClass('class')
//     ->setStyle('style')
//     ->setColl(20)
//     ->setRow(20)
//     ->html();

// $hr = new Hr();

// echo $hr
//     ->setColor('red')
//     ->setSize(5)
//     ->setWidth(500)
//     ->html();


// $br = new Br();

// echo $br
//     ->html();

// $img = new Img();

// echo $img
//     ->setSrc('1.jpg')
//     ->setHeight(200)
//     ->setWidth(200)
//     ->setAlt('image')
//     ->setBorder(1)
//     ->html();

// echo $br->html();

// $h = new H();
//  echo $h->setLevel(1)
//  ->setId('123')
//  ->setClass('header')
//  ->setStyle('qwerty')
//  ->setInnerText('header')
//  ->html();