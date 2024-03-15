<?php

namespace Arquitechture\DesignPattern\Report;

use Arquitechture\DesignPattern\Order;

class ExportableOrder implements ExportableContent
{
    public function __construct(
        private Order $order
    ) {}

    public function content(): array
    {
        return [
            'finalization_date' => $this->order->finalizationDate->format('d/m/Y'),
            'customer_name' => $this->order->customerName
        ];
    }
}