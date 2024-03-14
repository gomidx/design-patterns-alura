<?php

namespace Arquitechture\DesignPattern\Discounts;

use Arquitechture\DesignPattern\Budget;

class MoreThanFiveHundredBrlDiscount extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}