<?php

namespace Arquitechture\DesignPattern\BudgetStatuses;

use Arquitechture\DesignPattern\Budget;
use DomainException;

class Disapproved extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new DomainException(
            "Reproved budgets can't receive discount."
        );
    }

    public function finish(Budget $budget): void
    {
        $budget->actualStatus = new Finished();
    }
}