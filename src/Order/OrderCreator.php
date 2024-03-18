<?php

namespace Arquitechture\DesignPattern\Order;

use Arquitechture\DesignPattern\Budget;
use DateTimeImmutable;

class OrderCreator
{
    private array $templates;

    public function createsOrder(
        string $customerName,
        string $formattedDate,
        Budget $budget
    ): Order {
        $template = $this->generateOrderTemplate($customerName, $formattedDate);

        $order = new Order();
        $order->template = $template;
        $order->budget = $budget;

        return $order;
    }

    private function generateOrderTemplate(string $customerName, string $formattedDate): OrderTemplate
    {
        $hash = md5($customerName . $formattedDate);

        if (!array_key_exists($hash, $this->templates)) {
            $template = new OrderTemplate($customerName, new DateTimeImmutable($formattedDate));

            $this->templates[$hash] = $template;
        }

        return $template;
    }
}