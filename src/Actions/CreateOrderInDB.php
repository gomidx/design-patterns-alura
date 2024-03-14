<?php

namespace Arquitechture\DesignPattern\Actions;

use Arquitechture\DesignPattern\Order;

class CreateOrderInDB implements ActionAfterOrderGeneration
{
    public function execute(Order $order): void
    {
        echo 'Saving order registry in DB.';
    }
}