<?php

use Arquitechture\DesignPattern\Sale\ServiceSaleFactory;

require 'vendor/autoload.php';

$saleFactory = new ServiceSaleFactory('Lucas');
$sale = $saleFactory->createSale();
$tax = $saleFactory->tax();

var_dump($sale, $tax);
