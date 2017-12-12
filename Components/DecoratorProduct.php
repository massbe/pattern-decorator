<?php


namespace Components;


abstract class DecoratorProduct implements PizzaInterface
{
    protected $pizzaWithToppings;

    public function __construct(PizzaInterface $decorable)
    {
        $this->pizzaWithToppings = $decorable;
    }

    public function createPizza()
    {
        return $this->pizzaWithToppings->createPizza()."<br>".$this->getNameProduct()." - ".$this->getPrice()." грн";
    }

    abstract public function getNameProduct();
    abstract public function getPrice();
}