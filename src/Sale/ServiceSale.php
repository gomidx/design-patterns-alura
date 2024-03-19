<?php

namespace Arquitechture\DesignPattern\Sale;

use DateTimeInterface;

class ServiceSale extends Sale
{
    public function __construct(
        DateTimeInterface $initialDate,
        public string $providerName
    ) {
        parent::__construct($initialDate);
    }
}