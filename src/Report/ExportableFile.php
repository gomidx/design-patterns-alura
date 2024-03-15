<?php

namespace Arquitechture\DesignPattern\Report;

interface ExportableFile
{
    public function save(ExportableContent $exportableContent): string;
}