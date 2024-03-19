<?php

namespace Arquitechture\DesignPattern\Sale;

use Arquitechture\DesignPattern\Taxes\Icms;
use Arquitechture\DesignPattern\Taxes\Tax;
use DateTimeImmutable;

class ProductSaleFactory implements SaleFactory
{
    public function __construct(
        private int $productWheight
    ) {}

    public function createSale(): Sale
    {
        return new ProductSale(new DateTimeImmutable(), $this->productWheight);
    }

    public function tax(): Tax
    {
        return new Icms();
    }
}