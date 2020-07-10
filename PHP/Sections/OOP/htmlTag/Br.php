<?php

class Br extends Tag
{
    protected $clear = " clear='left'";


    public function setClear(string $clear)
    {
        $this->clear = " clear='$clear'";
        return $this;
    }


    public function html()
    {
        return "<br$this->clear>";
    }
}
