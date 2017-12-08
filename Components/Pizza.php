<?php


namespace Components;


class Pizza
{
    public $price = 10;
    public $yourPizza;

    public function __construct()
    {
        $this->yourPizza = 'Вы выбрали стандартную пицу без допингов. Цена её '.$this->price.' грн.';
    }

    public function createPizza() {
        echo $this->yourPizza;
    }
}