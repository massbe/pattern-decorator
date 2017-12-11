<?php


namespace Components;


class Pizza implements PizzaInterface
{
    public $price = 10;
    public $pizza;

    public function __construct()
    {
        $this->pizza = 'Вы заказали пиццу из: ';
    }

    public function createPizza()
    {
        echo $this->pizza = "Вы выбрали стандартную пицу. Её стоимость - 10 грн.";
    }
}