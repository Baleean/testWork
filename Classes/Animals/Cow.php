<?php

namespace Classes\Animals;


class Cow extends Animal
{
    public function __construct()
    {
        parent::__construct();
        $this->product = [8, 12];
    }

}