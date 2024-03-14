<?php

namespace Arquitechture\DesignPattern\Discounts;

use Arquitechture\DesignPattern\Budget;

class MoreThanFiveItemsDiscount extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itemsQuantity > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}