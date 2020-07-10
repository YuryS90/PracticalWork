<?php

abstract class HtmlList extends Tag
{
    protected $listInnerData;

    public function setInnerData(array $data)
    {
        $this->listInnerData = ''; // обнуляем

        foreach ($data as $value) {
            $this->listInnerData .= "\t<li>$value</li>\n";
        }

        return $this;
    }

    public function setType(string $type)
    {
        if (in_array($type, $this->avalibleType)) {
            $this->type = " type='$type'";
        }
        return $this;
    }

    public function html()
    {
        return "\n<$this->tagName$this->type$this->style $this->id $this->class>\n$this->listInnerData</$this->tagName>";
    }
}
