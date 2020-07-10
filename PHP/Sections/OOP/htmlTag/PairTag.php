<?php

abstract class PairTag extends Tag
{

    protected $innerText;

    public function __construct(string $text = '')
    {
        $this->setInnerText($text);
    }

    public function setInnerText(string $innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function addInnerText(string $innerText)
    {
        $this->innerText .= $innerText;
        return $this;
    }
}