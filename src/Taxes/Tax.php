<?php

namespace Arquitechture\DesignPattern\Taxes;

use Arquitechture\DesignPattern\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}