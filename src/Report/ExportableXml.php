<?php

namespace Arquitechture\DesignPattern\Report;

use SimpleXMLElement;

class ExportableXml implements ExportableFile
{
    public function __construct(
        private string $parentElementName
    ) {}

    public function save(ExportableContent $exportableContent): string
    {
        $xmlElement = new SimpleXMLElement("<{$this->parentElementName} />");

        foreach ($exportableContent->content() as $key => $value) {
            $xmlElement->addChild($key, $value);
        }

        $filePath = tempnam(sys_get_temp_dir(), 'xml');

        $xmlElement->asXML($filePath);

        return $filePath;
    }
}