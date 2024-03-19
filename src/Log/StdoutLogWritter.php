<?php

namespace Arquitechture\DesignPattern\Log;

class StdoutLogWritter implements Logger
{
    public function write(string $message): void
    {
        echo $message;
    }
}