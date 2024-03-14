<?php

namespace Arquitechture\DesignPattern\BudgetStatuses;

use Arquitechture\DesignPattern\Budget;

class WaitingApproval extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function approve(Budget $budget): void
    {
        $budget->actualStatus = new Approved();
    }

    public function disapprove(Budget $budget): void
    {
        $budget->actualStatus = new Disapproved();
    }
}