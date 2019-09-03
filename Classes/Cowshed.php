<?php

namespace Classes;

use Classes\Animals\Animal;
use Classes\Animals\Chicken;
use Classes\Animals\Cow;

/**
 * Class Cowshed - отражает сущность хлева, содержит информацию о количестве животных, собранных продуктах за сутки
 * и их общее количество, а также позволяет добавлять животных двух видов: коров и куриц.
 * @package Classes
 */

class Cowshed
{
    /**
     * @var array $cow Содержит массив объектов Cow
     */

    private $cow = [];

    /**
     * @var array $chicken Содержит массив объектов Chicken
     */

    private $chicken = [];

    /**
     * @var integer $cowProduct Статическая переменная, содержащая общее количество собранной продукции от объектов
     * типа Cow за все время
     */

    private static $cowProduct;

    /**
     * @var integer $chickenProduct Статическая переменная, содержащая общее количество собранной продукции от объектов
     * типа Chicken за все время
     */

    private static $chickenProduct;

    /**
     * @var integer $cowProductToday Содержит количество продуктов, полученных от объектов типа Cow за сутки.
     * Обнуляется при каждом вызове $this->getAllProducts
     */

    private $cowProductToday;

    /**
     * @var integer $chickenProductToday Содержит количество продуктов, полученных от объектов типа Chicken за сутки.
     * Обнуляется при каждом вызове $this->getAllProducts
     */

    private $chickenProductToday;

    /**
     * @var int $day Статическая перемнная - счетчик дней.
     */

    private static $day = 1;

    public function __construct($animals = ['Cow' => 10, 'Chicken' => 20])
    {
        foreach ($animals as $key => $value) {
            $class = 'Classes\\Animals\\' . $key;
            for ($i = 0; $i < $value; $i++) {
                $this->addUnknownAnimal(new $class);
            }
        }
    }

    public function addUnknownAnimal(Animal $animal)
    {
        if($animal instanceof Cow) {
            $this->addCow(new Cow);
        } elseif ($animal instanceof Chicken) {
            $this->addChicken(new Chicken);
        }
    }

    public function addCow(Cow $cow)
    {
        $this->cow[] = $cow;
    }

    public function addChicken(Chicken $chicken)
    {
        $this->chicken[] = $chicken;
    }

    private function getProductsCow()
    {
        foreach ($this->cow as $cow) {
            $this->cowProductToday += $cow->getProduct();
        }
        self::$cowProduct += $this->cowProductToday;
        return self::$cowProduct . ' литров молока';
    }

    private function getProductsChicken()
    {
        foreach ($this->chicken as $chicken) {
            $this->chickenProductToday += $chicken->getProduct();
        }
        self::$chickenProduct += $this->chickenProductToday;

        return self::$chickenProduct . ' яиц';
    }

    public function getProductToday()
    {
        $products = "Сегодня собрано: " . PHP_EOL;
        $products .= $this->cowProductToday . " литров молока" . PHP_EOL;
        $products .= $this->chickenProductToday . " яиц" . PHP_EOL;
        return $products;
    }

    public function getAllProducts()
    {
        echo "День " . self::$day . PHP_EOL;
        self::$day++;

        echo "Всего собрано: " . PHP_EOL;
        echo $this->getProductsCow() . PHP_EOL;
        echo $this->getProductsChicken() . PHP_EOL;

        echo $this->getProductToday();
        echo "---------------" . PHP_EOL;
        $this->cowProductToday = 0;
        $this->chickenProductToday = 0;
    }
}