<?php

require 'vendor/autoload.php';

use Arquitechture\DesignPattern\Actions\CreateOrderInDB;
use Arquitechture\DesignPattern\Actions\CreateOrderLog;
use Arquitechture\DesignPattern\GenerateOrder;
use Arquitechture\DesignPattern\GenerateOrderHandler;

$budgetValue = $argv[1];
$itemsQuantity = $argv[2];
$customerName = $argv[3];

$genOrder = new GenerateOrder($budgetValue, $itemsQuantity, $customerName);

$genOrderHandler = new GenerateOrderHandler();

$genOrderHandler->addActionAfterOrderGeneration(new CreateOrderInDB());
$genOrderHandler->addActionAfterOrderGeneration(new CreateOrderLog());
$genOrderHandler->execute($genOrder);