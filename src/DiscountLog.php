<?php

namespace Arquitechture\DesignPattern;

class DiscountLog
{
    public function info(float $calculatedDiscount)
    {
        echo "Saving discount log: $calculatedDiscount";
    }
}