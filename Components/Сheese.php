<?php


namespace Components;


class Сheese extends ProductInterface
{
    public $price = 10;

    public function getPrice()
    {
        return $this->price;
    }

    public function addProduct(){
        return "Сыр";
    }
}