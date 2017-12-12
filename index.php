<?php
include_once ('vendor/autoload.php');

use Components\Pizza;
use Components\DecoratorSausage;
use Components\DecoratorCheese;
use Components\DecoratorTomato;

$pizza = new DecoratorSausage(new DecoratorCheese(new DecoratorCheese(new Pizza())));
echo $pizza->createPizza();
