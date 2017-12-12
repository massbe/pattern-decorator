<?php


namespace Components;


class DecoratorSausage extends DecoratorProduct
{
    private $price = 20;
    private $nameProduct = 'Колбасочка';

    public function getPrice()
    {
        return $this->price;
    }

    public function getNameProduct()
    {
        return $this->nameProduct;
    }
}