<?php

namespace Arquitechture\DesignPattern;

use Arquitechture\DesignPattern\BudgetStatuses\BudgetStatus;
use Arquitechture\DesignPattern\BudgetStatuses\WaitingApproval;

class Budget
{
    public int $itemsQuantity;
    public float $value;
    public BudgetStatus $actualStatus;

    public function __construct()
    {
        $this->actualStatus = new WaitingApproval();
    }

    public function applyExtraDiscount(): void
    {
        $this->value -= $this->actualStatus->calculateExtraDiscount($this);
    }

    public function approve()
    {
        $this->actualStatus->approve($this);
    }

    public function disapprove()
    {
        $this->actualStatus->disapprove($this);
    }

    public function finish()
    {
        $this->actualStatus->finish($this);
    }
}