<?php

namespace Arquitechture\DesignPattern;

class GenerateOrder
{
    public function __construct(
        private float $budgetValue,
        private int $itemsQuantity,
        private string $customerName
    ) {}

    public function getBudgetValue(): float
    {
        return $this->budgetValue;
    }

    public function getItemsQuantity(): int
    {
        return $this->itemsQuantity;
    }

    public function getCustomerName(): string
    {
        return $this->customerName;
    }
}