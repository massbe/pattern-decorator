<?php
include_once ('vendor/autoload.php');

use Components\Pizza;
use Components\DecoratorSausage;
use Components\DecoratorCheese;
use Components\DecoratorTomato;

$pizza = new DecoratorTomato(new DecoratorCheese(new Pizza()));
$pizza->createPizza();
//print_r ($pizza->createPizza());
