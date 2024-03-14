<?php

namespace Arquitechture\DesignPattern\Taxes;

use Arquitechture\DesignPattern\Budget;

abstract class TaxWithTwoAliquotes implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        if ($this->shoudApplyMaxTax($budget)) {
            return $this->applyMaxTax($budget);
        }

        return $this->applyMinTax($budget);
    }

    abstract protected function shoudApplyMaxTax(Budget $budget): bool;
    abstract protected function applyMaxTax(Budget $budget): float;
    abstract protected function applyMinTax(Budget $budget): float;
}