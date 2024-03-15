<?php

namespace Arquitechture\DesignPattern\Report;

use Arquitechture\DesignPattern\Budget;

class ExportableBudget implements ExportableContent
{
    public function __construct(
        private Budget $budget
    ) {}

    public function content(): array
    {
        return [
            'value' => $this->budget->value,
            'items_quantity' => $this->budget->itemsQuantity
        ];
    }
}