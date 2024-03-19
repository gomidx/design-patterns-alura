<?php

namespace Arquitechture\DesignPattern\Sale;

use Arquitechture\DesignPattern\Taxes\Iss;
use Arquitechture\DesignPattern\Taxes\Tax;
use DateTimeImmutable;

class ServiceSaleFactory implements SaleFactory
{
    public function __construct(
        private string $providerName
    ) {}

    public function createSale(): Sale
    {
        return new ProductSale(new DateTimeImmutable(), $this->providerName);
    }

    public function tax(): Tax
    {
        return new Iss();
    }
}