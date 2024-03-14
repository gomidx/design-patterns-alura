<?php

namespace Arquitechture\DesignPattern\BudgetStatuses;

use Arquitechture\DesignPattern\Budget;

class Approved extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function finish(Budget $budget): void
    {
        $budget->actualStatus = new Finished();
    }
}