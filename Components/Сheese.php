<?php


namespace Components;


class Сheese extends ProductAbstract
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