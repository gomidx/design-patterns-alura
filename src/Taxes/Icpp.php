<?php

namespace Arquitechture\DesignPattern\Taxes;

use Arquitechture\DesignPattern\Budget;

class Icpp extends TaxWithTwoAliquotes
{
    protected function shoudApplyMaxTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function applyMaxTax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function applyMinTax(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}