<?php

use Arquitechture\DesignPattern\Report\ExportableOrder;
use Arquitechture\DesignPattern\Report\ExportableXml;

require 'vendor/autoload.php';

$order->customerName = 'Lucas';
$order->finalizationDate = new DateTimeImmutable();

$exportableOrder = new ExportableOrder($order);
$exportableOrderXml = new ExportableXml('order');

echo $exportableOrderXml->save($exportableOrder);