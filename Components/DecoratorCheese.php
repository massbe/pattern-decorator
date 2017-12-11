<?php


namespace Components;


class DecoratorCheese implements PizzaInterface
{
    public $price = 10;
    public $nameProduct = 'Сырочек';
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