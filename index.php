<?php
include_once ('vendor/autoload.php');

use Components\Pizza;
use Components\DecoratorPizza;

$ingridientsFromForm = ['Sausage', 'Tomato', 'Tomato', 'Sausage', 'Сheese'];

$pizza = new DecoratorPizza(new Pizza());
$pizza->addIngri($ingridientsFromForm);
$pizza->createPizza();