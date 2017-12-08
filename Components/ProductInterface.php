<?php


namespace Components;


abstract class ProductInterface
{
    abstract public function getPrice();
    abstract public function addProduct();
}