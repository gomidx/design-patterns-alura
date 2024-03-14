<?php

namespace Arquitechture\DesignPattern\Discounts;

use Arquitechture\DesignPattern\Budget;

abstract class Discount
{
    public function __construct(
        protected ?Discount $nextDiscount
    ) {}

    abstract public function calculateDiscount(Budget $budget): float;
}