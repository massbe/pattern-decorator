<?php


namespace Components;


class Pizza implements PizzaInterface
{
    public $price = 10;
    private $pizza;

    public function __construct()
    {
        $this->pizza = 'Вы заказали пиццу';
    }

    public function createPizza()
    {
        return $this->pizza;
    }
}