<?php

namespace Arquitechture\DesignPattern\Taxes;

use Arquitechture\DesignPattern\Budget;

class Icms implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value . 0.1;
    }
}