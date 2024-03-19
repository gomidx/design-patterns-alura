<?php

namespace Arquitechture\DesignPattern\Sale;

use DateTimeInterface;

class ProductSale extends Sale
{
    public function __construct(
        DateTimeInterface $initialDate,
        public string $productWeight
    ) {
        parent::__construct($initialDate);
    }
}