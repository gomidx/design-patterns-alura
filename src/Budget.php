<?php

namespace Arquitechture\DesignPattern;

use Arquitechture\DesignPattern\BudgetStatuses\BudgetStatus;
use Arquitechture\DesignPattern\BudgetStatuses\WaitingApproval;

class Budget implements Budgetable
{
    public array $items;
    public BudgetStatus $actualStatus;

    public function __construct()
    {
        $this->actualStatus = new WaitingApproval();
        $this->items = [];
    }

    public function approve(): void
    {
        $this->actualStatus->approve($this);
    }

    public function disapprove(): void
    {
        $this->actualStatus->disapprove($this);
    }

    public function finish(): void
    {
        $this->actualStatus->finish($this);
    }

    public function addItem(Budgetable $item): void
    {
        $this->items[] = $item;
    }

    public function value(): float
    {
        return array_reduce(
            $this->items,
            function (float $accumulatedValue, Budgetable $item) {
                return $item->value() + $accumulatedValue;
            },
        0);
    }
}