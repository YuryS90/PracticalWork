<?php
class Calculator
{
    private $a; // поле или свойство
    private $b; // поле

    public function __construct($a, $b) 
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum() // метод
    {
        return $this->a + $this->b;
    }

    public function mul() // метод
    {
        return $this->a * $this->b;
    }

    public function dif() // метод
    {
        return $this->a - $this->b;
    }
    
    public function div() // метод
    {
        return $this->a / $this->b;
    }
}
