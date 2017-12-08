<?php


namespace Components;


class Sausage extends ProductInterface
{
    public $price = 20;

    public function getPrice()
    {
        return $this->price;
    }

    public function addProduct(){
        return "Колбасочка";
    }
}