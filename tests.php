<?php

use Arquitechture\DesignPattern\Budget;
use Arquitechture\DesignPattern\DiscountCalculator;

require 'vendor/autoload.php';

$calculator = new DiscountCalculator();

$budget = new Budget();

$budget->value = 600;
$budget->itemsQuantity = 4;

echo $calculator->calculate($budget) . PHP_EOL;