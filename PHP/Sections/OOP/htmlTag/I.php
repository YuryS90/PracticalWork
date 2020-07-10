<?php

class I extends PairTag
{
    public function html()
    {
        return "<i$this->class$this->id>$this->innerText</i>";
    }
}