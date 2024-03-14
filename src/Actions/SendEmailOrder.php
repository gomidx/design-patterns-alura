<?php

namespace Arquitechture\DesignPattern\Actions;

use Arquitechture\DesignPattern\Order;

class SendEmailOrder implements ActionAfterOrderGeneration
{
    public function execute(Order $order): void
    {
        echo 'Sending e-mail order.';
    }
}