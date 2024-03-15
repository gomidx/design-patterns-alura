<?php

namespace Arquitechture\DesignPattern\Report;

interface ExportableContent
{
    public function content(): array;
}