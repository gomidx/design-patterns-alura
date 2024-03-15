<?php

namespace Arquitechture\DesignPattern;

use Arquitechture\DesignPattern\BudgetStatuses\Finished;
use Arquitechture\DesignPattern\Http\HttpAdapter;
use DomainException;

class BudgetRegister
{
    public function __construct(
        private HttpAdapter $http
    ) {}

    public function register(Budget $budget)
    {
        if (!$budget->actualStatus instanceof Finished) {
            throw new DomainException('Only finished budgets can be registered.');
        }

        $params = [
            'value' => $budget->value,
            'quantity' => $budget->itemsQuantity
        ];

        $this->http->post('http://api.register.budget', $params);
    }
}