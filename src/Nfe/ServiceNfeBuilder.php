<?php

namespace Arquitechture\DesignPattern\Nfe;

class ServiceNfeBuilder extends NfeBuilder
{
    public function build(): Nfe
    {
        $nfeValue = $this->nfe->value();

        $this->nfe->taxValue = $nfeValue * 0.06;

        return $this->nfe;
    }
}