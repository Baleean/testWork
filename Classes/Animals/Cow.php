<?php

namespace Classes\Animals;

/**
 * Class Cow
 * @package Classes\Animals
 */

class Cow extends Animal
{
    /**
     * Вызов родительского конструктора и определение минимального и максимального значения собираемой продукции за сутки
     * у животных данного вида.
     * В случае изменения реализации и добавления подвидов/подклассов, отличающихся по количеству собираемой продукции -
     * переопределить метод в дочернем классе.
     * Cow constructor.
     */

    public function __construct()
    {
        parent::__construct();
        $this->product = [8, 12];
    }

}