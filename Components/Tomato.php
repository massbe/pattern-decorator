<?php


namespace Components;


class Tomato extends ProductInterface
{
    public $price = 5;

    public function getPrice()
    {
        return $this->price;
    }

    public function addProduct(){
        return "Томаты";
    }
}