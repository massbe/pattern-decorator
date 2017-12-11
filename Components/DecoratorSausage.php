<?php


namespace Components;


class DecoratorSausage implements PizzaInterface
{
    public $price = 20;
    public $nameProduct = 'Колбасочка';
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
        echo $this->pizzaWithToppings;
    }
}