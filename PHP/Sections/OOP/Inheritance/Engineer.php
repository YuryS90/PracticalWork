<?php

class Engineer extends Student
{
    public function work()
    {
        return "I can work. ";
    }

    public function learn($subject)
    {
        return parent::learn($subject) . " very well";
    }
}