<?php

namespace Arquitechture\DesignPattern\Log;

abstract class LogManager
{
    public function log(string $type, string $message): void
    {
        $logger = $this->createLogWritter();

        $date = date('d/m/Y');

        $formattedMessage = "[$date][$type]: $message";

        $logger->write($formattedMessage);
    }

    abstract public function createLogWritter(): Logger;
}