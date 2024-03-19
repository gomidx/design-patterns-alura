<?php

namespace Arquitechture\DesignPattern;

use Arquitechture\DesignPattern\Actions\ActionAfterOrderGeneration;
use DateTimeImmutable;

class GenerateOrderHandler
{
    private array $actionsAfterOrderGeneration;

    public function __construct() {}

    public function addActionAfterOrderGeneration(ActionAfterOrderGeneration $action): void
    {
        $this->actionsAfterOrderGeneration[] = $action;
    }

    public function execute(GenerateOrder $generateOrder): void
    {
        $budget = new Budget();
        $budget->itemsQuantity = $generateOrder->getItemsQuantity();
        $budget->value = $generateOrder->getBudgetValue();

        $order = new Order();
        $order->finalizationDate = new DateTimeImmutable();
        $order->customerName = $generateOrder->getCustomerName();
        $order->budget = $budget;

        foreach ($this->actionsAfterOrderGeneration as $action) {
            $action->execute($order);
        }
    }
}