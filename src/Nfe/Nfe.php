<?php

namespace Arquitechture\DesignPattern\Nfe;

use Arquitechture\DesignPattern\BudgetItem;
use DateTimeImmutable;
use DateTimeInterface;

class Nfe
{
    public string $companyDocument;
    public string $companyName;
    public array $items;
    public string $annotations;
    public DateTimeInterface $emissionDate;
    public float $taxValue;

    public function value(): float
    {
        return array_reduce(
            $this->items,
            function (float $accumulatedValue, BudgetItem $actualItem) {
                return $accumulatedValue + $actualItem->value();
            },
            0
        );
    }

    public function __clone()
    {
        $this->emissionDate = new DateTimeImmutable();
    }
}