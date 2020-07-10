<?php

class Ul extends HtmlList
{
    protected $type = " type='square'"; // если в index2.php в ->setType("circle123") ввести не правильное значение (как в скобках)
    // то передастся строка " type='square'"
    protected $avalibleType = ["square", "circle", "disk"]; 
    protected $tagName = "ul";
}
