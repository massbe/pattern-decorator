<?php


namespace Components;


class Sausage extends ProductAbstract
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