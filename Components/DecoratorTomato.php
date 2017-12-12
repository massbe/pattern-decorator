<?php


namespace Components;


class DecoratorTomato extends DecoratorProduct
{
    private $price = 5;
    private $nameProduct = 'Томатики';

    public function getPrice()
    {
        return $this->price;
    }

    public function getNameProduct()
    {
        return $this->nameProduct;
    }
}