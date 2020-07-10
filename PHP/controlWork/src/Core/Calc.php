<?php

namespace Core;

class Calc
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * сумма
     */
    public function sum()
    {
        return $this->a + $this->b;
    }

    /**
     * умножение
     */
    public function mul()
    {
        return $this->a * $this->b;
    }


    /**
     * деление
     */
    public function div()
    {
        return $this->a / $this->b;
    }


    /**
     * разность
     */
    public function dif()
    {
        return $this->a - $this->b;
    }
}
