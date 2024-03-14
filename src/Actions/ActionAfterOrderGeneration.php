<?php

namespace Arquitechture\DesignPattern\Actions;

use Arquitechture\DesignPattern\Order;

interface ActionAfterOrderGeneration
{
    public function execute(Order $order): void;
}