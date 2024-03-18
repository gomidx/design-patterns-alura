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

        $calculatedDiscount = $discountChain->calculateDiscount($budget);

        $discountLog = new DiscountLog();
        $discountLog->info($calculatedDiscount);

        return $calculatedDiscount;
    }
}