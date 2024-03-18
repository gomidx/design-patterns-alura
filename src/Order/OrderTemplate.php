<?php

namespace Arquitechture\DesignPattern\Order;

use DateTimeInterface;

class OrderTemplate
{
    public function __construct(
        private string $customerName,
        private DateTimeInterface $finalizationDate
    ) {}

    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function getFinalizationDate(): DateTimeInterface
    {
        return $this->finalizationDate;
    }
}