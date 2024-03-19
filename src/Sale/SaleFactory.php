<?php

namespace Arquitechture\DesignPattern\Sale;

use Arquitechture\DesignPattern\Taxes\Tax;

interface SaleFactory
{
    public function createSale(): Sale;
    public function tax(): Tax;
}