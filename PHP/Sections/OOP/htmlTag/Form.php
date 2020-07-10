<?php

class Form extends PairTag
{
    private $action;
    private $method = " method='GET'"; // по умолчанию, если не указывать method в index2.php 


    public function setAction(string $action)
    {
        $this->action = " action='$action'"; // " action='$action'" - это кусок html, чтобы писать меньше в методе html()
        return $this;
    }

    public function setMethod($method)
    {
        if (in_array($method, ["POST", "GET"])) {
            $this->method = " method='$method'";
        }
        return $this;
    }
    
    public function html()
    {
        return "<form$this->action$this->method>$this->innerText\n</form>";
    }
}