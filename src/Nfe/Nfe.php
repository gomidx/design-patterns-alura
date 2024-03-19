<?php

namespace Arquitechture\DesignPattern\Nfe;

use Arquitechture\DesignPattern\BudgetItem;
use DateTimeInterface;

class Nfe
{
    public string $companyDocument;
    public string $companyName;
    public array $items;
    public string $annotations;
    public DateTimeInterface $emissionDate;
    public float $taxValue;

    public function value()
    {
        return array_reduce(
            $this->items,
            function (float $accumulatedValue, BudgetItem $actualItem) {
                return $accumulatedValue + $actualItem->value();
            },
            0
        );
    }
}