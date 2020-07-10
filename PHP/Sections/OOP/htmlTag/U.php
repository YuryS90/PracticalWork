<?php

class U extends PairTag
{
    public function html()
    {
        return "<u$this->class$this->id>$this->innerText</u>";
    }
}