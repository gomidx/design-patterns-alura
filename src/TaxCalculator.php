<?php

namespace Arquitechture\DesignPattern;

use Arquitechture\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $taxName): float
    {
        return $budget->value * 0.1;

        switch ($taxName) {
            case 'ICMS':
                return $budget->value * 0.1;
                break;

            case 'ICMS':
                return $budget->value * 0.06;
                break;

            default:
                break;
        }
    }
}