<?php


namespace Components;


class DecoratorTomato implements PizzaInterface
{
    public $price = 5;
    public $nameProduct = 'Томатики';
    public $pizzaWithToppings;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizzaWithToppings = $pizza;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    public function createPizza()
    {
        $this->pizzaWithToppings->pizza .= "<br>".$this->nameProduct." - ".$this->price." грн<br>";
        var_dump($this->pizzaWithToppings);
    }
}