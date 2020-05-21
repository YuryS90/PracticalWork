<?php
class Student extends Person
{
    public function learn($subject)
    {
        return "I can learn $subject";
    }
}