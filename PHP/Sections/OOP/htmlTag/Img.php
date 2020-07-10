<?php

class Img extends Tag
{
    protected $src;
    protected $width;
    protected $height;
    protected $alt;
    protected $border;


    public function setSrc(string $src)
    {
        $this->src = " src='$src'";
        return $this;
    }


    public function setWidth(int $width)
    {
        $this->width = " width='$width'";
        return $this;
    }


    public function setHeight(int $height)
    {
        $this->height = " height='$height'";
        return $this;
    }

    public function setAlt(string $alt)
    {
        $this->alt = " alt='$alt'";
        return $this;
    }

    public function setBorder(int $border)
    {
        $this->border = " border='$border'";
        return $this;
    }


    public function html()
    {
        return "<img$this->src$this->width$this->height$this->alt$this->border>";
    }
}