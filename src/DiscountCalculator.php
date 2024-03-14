<?php

namespace Arquitechture\DesignPattern;

use Arquitechture\DesignPattern\Discounts\MoreThanFiveHundredBrlDiscount;
use Arquitechture\DesignPattern\Discounts\MoreThanFiveItemsDiscount;
use Arquitechture\DesignPattern\Discounts\NoDiscount;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $discountChain = new MoreThanFiveItemsDiscount(
            new MoreThanFiveHundredBrlDiscount(
                new NoDiscount()
            )
        );

        return $discountChain->calculateDiscount($budget);
    }
}