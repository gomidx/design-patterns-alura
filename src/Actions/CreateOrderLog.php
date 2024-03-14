<?php

namespace Arquitechture\DesignPattern\Actions;

use Arquitechture\DesignPattern\Order;

class CreateOrderLog implements ActionAfterOrderGeneration
{
    public function execute(Order $order): void
    {
        echo 'Order log.';
    }
}