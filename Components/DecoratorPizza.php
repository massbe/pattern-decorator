<?php
namespace Components;

class DecoratorPizza
{
    public $ingridients;
    public $yourPizzaWithToppings;

    public function __construct(Pizza $pizza)
    {
        $this->yourPizzaWithToppings = $pizza;
    }

    public function addIngri(array $arrayIngri = null)
    {
        if($arrayIngri){
            foreach ($arrayIngri as $productItem) {
                $ingriInfoFromFactoryProduct = new FactoryProduct();

                try {
                    $ingriInfo = $ingriInfoFromFactoryProduct->getProductInfo($productItem);
                    $this->ingridients[] = $ingriInfo->getNameProduct();
                    $this->yourPizzaWithToppings->price += $ingriInfo->getPrice();
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }
            }
            $this->yourPizzaWithToppings->yourPizza = 'Ваша пицца стоит '.$this->yourPizzaWithToppings->price." грн. Она состоит из ".implode(', ', $this->ingridients);
        }
    }

    public function createPizza()
    {
        echo $this->yourPizzaWithToppings->yourPizza;
    }
}