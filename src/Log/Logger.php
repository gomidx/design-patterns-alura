<?php

namespace Arquitechture\DesignPattern\Log;

interface Logger
{
    public function write(string $message): void;
}