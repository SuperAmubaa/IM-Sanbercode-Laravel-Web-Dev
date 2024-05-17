<?php
require_once 'animal.php';

class Ape extends animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 2;
    }

    public function yell()
    {
        return "Auooo";
    }
}
