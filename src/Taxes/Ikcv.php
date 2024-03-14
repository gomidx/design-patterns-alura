<?php

namespace Arquitechture\DesignPattern\Taxes;

use Arquitechture\DesignPattern\Budget;

class Ikcv extends TaxWithTwoAliquotes
{
    protected function shoudApplyMaxTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->itemsQuantity > 3;
    }

    protected function applyMaxTax(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function applyMinTax(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}