<?php

namespace Arquitechture\DesignPattern\BudgetStatuses;

use Arquitechture\DesignPattern\Budget;
use DomainException;

abstract class BudgetStatus
{
    /**
     * @throws \DomainException
     */
    abstract public function calculateExtraDiscount(Budget $budget): float;

    public function approve(Budget $budget)
    {
        throw new DomainException(
            "This budget can't be approved."
        );
    }

    public function disapprove(Budget $budget)
    {
        throw new DomainException(
            "This budget can't be disapproved."
        );
    }

    public function finish(Budget $budget)
    {
        throw new DomainException(
            "This budget can't be finished."
        );
    }
}