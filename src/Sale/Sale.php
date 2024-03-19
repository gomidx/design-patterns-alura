<?php

namespace Arquitechture\DesignPattern\Sale;

use DateTimeInterface;

abstract class Sale
{
    public function __construct(
        public DateTimeInterface $initialDate
    ) {}
}