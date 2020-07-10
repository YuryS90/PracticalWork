<?php
//<input type="radio" name="drink" value="rad2"> Чай

class Input extends Tag
{
    protected $type = " type='text'";
    protected $value = '';
    protected $name;

    public function setType(string $type)
    {
        if (in_array($type, [
            'text',
            'submit',
            'password',
            'hidden',
            'button',
            'reset',
            'image',
            'file',
            'radio',
            'checkbox'
        ])) {
            $this->type = " type='$type'";
        }
        return $this;
    }

    public function setValue(string $value)
    {
        $this->value = " value='$value'";
        return $this;
    }

    public function setValueType(array $data)
    {
        reset($data); //reset — Устанавливает внутренний указатель массива на его первый элемент
        $buf = each($data); //Возвращает текущую пару ключ/значение из массива и продвигает вперед его указатель.
        $this->setType($buf['key'])->setValue($buf['value']);
        return $this;
    }

    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }


    public function html()
    {
        return "\n<input$this->type$this->name$this->value>\n";
    }
}
