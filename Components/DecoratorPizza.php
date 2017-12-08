<?php


namespace Components;


class DecoratorPizza
{
    public $ingri;
    public $price = 10;
    public $yourPizzaWithDop;

    public function __construct(Pizza $pizza)
    {
        $this->yourPizzaWithDop = $pizza;
    }

    public function addIngri(array $arrayIngri)
    {
        try {
            foreach ($arrayIngri as $productItem) {
                $ingriInfoFromFactoryProduct = new FactoryProduct();
                $ingriInfo = $ingriInfoFromFactoryProduct->getProductInfo($productItem);
                $this->ingri[] = $ingriInfo->addProduct();
                $this->price += $ingriInfo->getPrice();
            }
        } catch (\Exception $e) {
            $e->getMessage();
        }

        $this->createPizzaWithDop();
    }

    public function createPizzaWithDop()
    {
        $this->yourPizzaWithDop->yourPizza = 'Ваша пицца стоит '.$this->price." грн. Она состоит из ".implode(', ', $this->ingri);
    }

    public function __call($method, $args = '')
    {
        return $this->yourPizzaWithDop->$method($args);
    }
}