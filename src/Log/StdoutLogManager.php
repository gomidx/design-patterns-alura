<?php

namespace Arquitechture\DesignPattern\Log;

class StdoutLogManager extends LogManager
{
    public function createLogWritter(): Logger
    {
        return new StdoutLogWritter();
    }
}