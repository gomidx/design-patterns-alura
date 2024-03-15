<?php

namespace Arquitechture\DesignPattern\Taxes;

use Arquitechture\DesignPattern\Budget;

class Iss extends Tax
{
    public function doSpecificCalc(Budget $budget): float
    {
        return $budget->value . 0.06;
    }
}