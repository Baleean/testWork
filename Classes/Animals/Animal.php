<?php

namespace Classes\Animals;

use Interfaces\CollectInterface;

/**
 * Class Animal Базовый абстрактный класс, от которого должны наследовать все классы-сущности животных
 *
 * @package Classes\Animals
 */

abstract class Animal implements CollectInterface
{
    /**
     * @var array $product Простой массив, должен содержать 2 элемента - минимальное и максимальное количество
     * продуктов, которое может быть собрано с животного конкретного вида.
     */

    protected $product = [];

    /**
     * @static int $id Статическое свойство - счетчик для идентификаторов, хранит порядковый номер последнего добавленного
     * животного.
     */

    protected static $id = 1;

    /**
     * @var int $id_animal Свойство содержит уникальный идентификатор каждого животного в хлеве.
     * Не зависит от вида животного
     */

    protected $id_animal;

    /**
     * Animal constructor.
     */

    public function __construct()
    {
        $this->id_animal = self::$id++;
    }

    /**
     * Метод случайным образом выдает количество продуктов, собранных от конкретного животного за сутки
     * в пределах минимального и максимального значения, установленных в $this->product
     * @return int
     */

    public function getProduct()
    {
        return mt_rand($this->product[0], $this->product[1]);
    }

    /**
     * Возвращает идентификатор животного
     * @return int
     */

    public function getIdAnimal()
    {
        return self::$id;
    }
}