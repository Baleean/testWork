<?php
/**
 * Created by PhpStorm.
 * User: ekild
 * Date: 03.09.2019
 * Time: 16:35
 */

namespace Interfaces;

/**
 * Interface CollectInterface В данном случае, вероятно, применение интерфейса является излишним, но, тем не менее, по моему
 * мнению, логически оправданным, поскольку каждый класс, описывающий сущность в хлеву должен иметь метод, возвращающий количество
 * собираемой продукции.
 * @package Interfaces
 */
interface CollectInterface
{
    public function getProduct();
}