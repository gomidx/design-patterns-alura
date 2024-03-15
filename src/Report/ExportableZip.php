<?php

namespace Arquitechture\DesignPattern\Report;

use ZipArchive;

class ExportableZip implements ExportableFile
{
    public function __construct(
        private string $fileName
    ) {}

    public function save(ExportableContent $exportableContent): string
    {
        $filePath = tempnam(sys_get_temp_dir(), 'zip');

        $zip = new ZipArchive();

        $zip->open($filePath);
        $zip->addFromString($this->fileName, serialize($exportableContent));
        $zip->close();

        return $filePath;
    }
}