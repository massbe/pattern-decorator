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

    public function addIngri(array $arrayIngri = null)
    {
        if($arrayIngri){
            foreach ($arrayIngri as $productItem) {
                $ingriInfoFromFactoryProduct = new FactoryProduct();
                try {
                    $ingriInfo = $ingriInfoFromFactoryProduct->getProductInfo($productItem);
                    $this->ingri[] = $ingriInfo->addProduct();
                    $this->price += $ingriInfo->getPrice();
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }
            }
            $this->yourPizzaWithDop->yourPizza = 'Ваша пицца стоит '.$this->price." грн. Она состоит из ".implode(', ', $this->ingri);
        }
    }

    public function createPizza()
    {
        echo $this->yourPizzaWithDop->yourPizza;
    }
}