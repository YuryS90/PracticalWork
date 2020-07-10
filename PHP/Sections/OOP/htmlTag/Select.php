<?php

class Select extends Name
{
    private $selectOptionData;

    public function setInnerData(array $selectData)
    {
        $this->selectOptionData = "";

        foreach ($selectData as $key => $value) {
            $this->selectOptionData .= "\n<option value='$key'>$value</option>\n";
        }

        return $this;
    }

    // происходит не правильное автоформатирование
    // public function html()
    // {
    //     return "<select$this->name$this->id>$this->selectOptionData</select$this->"; 
    // }

    public function html()
    {
        return "<select$this->id$this->name>$this->selectOptionData</select>";
    }
}