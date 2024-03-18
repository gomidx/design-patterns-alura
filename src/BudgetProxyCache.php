<?php

namespace Arquitechture\DesignPattern;

use DomainException;

class BudgetProxyCache extends Budget
{
    private float $cacheValue = 0;

    public function __construct(
        private Budget $budget
    ) {}

    public function addItem(Budgetable $item): void
    {
        throw new DomainException("It's not possible to add items to a cached budget.");
    }

    public function value(): float
    {
        if ($this->cacheValue === 0) {
            $this->cacheValue = $this->budget->value();
        }

        return $this->cacheValue;
    }
}