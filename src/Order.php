<?php

namespace Arquitechture\DesignPattern;

use DateTimeInterface;

class Order
{
    public string $customerName;
    public DateTimeInterface $finalizationDate;
    public Budget $budget;
}