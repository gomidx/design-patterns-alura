<?php

namespace Arquitechture\DesignPattern\Nfe;

use Arquitechture\DesignPattern\BudgetItem;
use DateTimeImmutable;
use DateTimeInterface;

abstract class NfeBuilder
{
    protected Nfe $nfe;

    public function __construct()
    {
        $this->nfe = new Nfe();
        $this->nfe->emissionDate = new DateTimeImmutable();
    }

    public function toCompany(string $companyDocument, string $companyName): NfeBuilder
    {
        $this->nfe->companyDocument = $companyDocument;
        $this->nfe->companyName = $companyName;

        return $this;
    }

    public function withItem(BudgetItem $item): NfeBuilder
    {
        $this->nfe->items[] = $item;

        return $this;
    }

    public function withObservations(string $annotations): NfeBuilder
    {
        $this->nfe->annotations = $annotations;

        return $this;
    }

    public function withEmissionDate(DateTimeInterface $emissionDate): NfeBuilder
    {
        $this->nfe->emissionDate = $emissionDate;

        return $this;
    }

    abstract public function build(): Nfe;
}