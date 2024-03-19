<?php

namespace Arquitechture\DesignPattern\Log;

class FileLogManager extends LogManager
{
    public function __construct(
        private string $filePath
    ) {}

    public function createLogWritter(): Logger
    {
        return new FileLogWritter($this->filePath);
    }
}