<?php


namespace Components;


class DecoratorCheese extends DecoratorProduct
{
    private $price = 10;
    private $nameProduct = 'Сырочек';

    public function getPrice()
    {
        return $this->price;
    }

    public function getNameProduct()
    {
        return $this->nameProduct;
    }
}