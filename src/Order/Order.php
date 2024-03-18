<?php

namespace Arquitechture\DesignPattern\Order;

use Arquitechture\DesignPattern\Budget;

class Order
{
    public OrderTemplate $template;
    public Budget $budget;
}