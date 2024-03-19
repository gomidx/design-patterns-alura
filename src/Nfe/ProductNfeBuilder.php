<?php

namespace Arquitechture\DesignPattern\Nfe;

class ProductNfeBuilder extends NfeBuilder
{
    public function build(): Nfe
    {
        $nfeValue = $this->nfe->value();

        $this->nfe->taxValue = $nfeValue * 0.02;

        return $this->nfe;
    }
}