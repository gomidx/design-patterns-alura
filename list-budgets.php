<?php

use Arquitechture\DesignPattern\Budget;
use Arquitechture\DesignPattern\BudgetList;

require 'vendor/autoload.php';

$firstBudget = new Budget();
$firstBudget->itemsQuantity = 6;
$firstBudget->approve();
$firstBudget->finish();
$firstBudget->value = 800;

$secondBudget = new Budget();
$secondBudget->itemsQuantity = 4;
$secondBudget->disapprove();
$secondBudget->value = 300;

$budgetList = new BudgetList();
$budgetList->addBudget($firstBudget);
$budgetList->addBudget($secondBudget);

foreach ($budgetList as $budget) {
    echo "Value: " . $budget->value . PHP_EOL;
    echo "Status: " . get_class($budget->actualStatus) . PHP_EOL;
    echo "Items quantity: " . $budget->itemsQuantity . PHP_EOL;

    echo PHP_EOL;
}