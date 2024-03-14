<?php

namespace Arquitechture\DesignPattern\BudgetStatuses;

use Arquitechture\DesignPattern\Budget;
use DomainException;

class Finished extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new DomainException(
            "Finished budgets can't receive discount."
        );
    }
}