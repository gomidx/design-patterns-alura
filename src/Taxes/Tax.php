<?php

namespace Arquitechture\DesignPattern\Taxes;

use Arquitechture\DesignPattern\Budget;

abstract class Tax
{
    public function __construct(
        private ?Tax $otherTax = null
    ) {}

    abstract protected function doSpecificCalc(Budget $budget): float;

    public function calculateTax(Budget $budget)
    {
        return $this->doSpecificCalc($budget) + $this->doOtherTaxCalc($budget);
    }

    public function doOtherTaxCalc(Budget $budget): float
    {
        return $this->otherTax === null
            ? 0
            : $this->otherTax->calculateTax($budget)
        ;
    }
}