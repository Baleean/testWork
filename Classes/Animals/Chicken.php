<?php

namespace Classes\Animals;


class Chicken extends Animal
{
    public function __construct()
    {
        parent::__construct();
        $this->product = [0, 1];
    }
}