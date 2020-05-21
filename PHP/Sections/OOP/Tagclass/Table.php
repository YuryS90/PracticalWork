<?php

class Table
{
   
    protected $style;
    protected $data;


    public function __construct()
    {
        $this->clear();
    }

    public function clear(): self
    {
        $this->style = '';
        $this->data = '';
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = " style=\"$style\"";
        return $this;
    }

    public function data(array $data): self
    {

        $str = "";

        foreach ($data as $row) { //row - строка
            $str .= "<tr>\n"; // строку открыли
            foreach ($row as $cell) { //cell - ячейка
                $str .= "\t<td>$cell</td>\n";
            }
            $str .= "</tr>\n"; // строку закрыли
        }

        $this->data = $str;
        return $this;
    }

    public function html()
    {
        return "<table$this->style>\n$this->data</table>";
    }
}
