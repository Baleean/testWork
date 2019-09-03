<?php

namespace Classes\Animals;

use Interfaces\CollectInterface;

abstract class Animal implements CollectInterface
{
    protected $product = [];
    protected static $id = 1;

    protected $id_animal;

    public function __construct()
    {
        $this->id_animal = self::$id++;
    }

    public function getProduct()
    {
        return mt_rand($this->product[0], $this->product[1]);
    }

    public function getIdAnimal()
    {
        return self::$id;
    }
}