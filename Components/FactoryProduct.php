<?php


namespace Components;


class FactoryProduct
{
    public function getProductInfo($item)
    {
        $className = 'Components\\'.$item;
        if(!class_exists($className)){
            throw new \Exception('На кухне нет ингридиента'.$item.'<br>');
        }
        return $oneOfProduct = new $className();
    }
}