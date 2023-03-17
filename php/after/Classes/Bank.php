<?php

namespace App\Classes;

use App\Interfaces\TaxableInterface;

class Bank
{
    protected TaxableInterface $taxable;

    public function __construct(TaxableInterface $taxable)
    {
        $this->taxable = $taxable;
    }

    public function calculateFinalPrice(float $price): float
    {
        return (($price / 100) * $this->taxable->getInflation()) * 100;
    }
}

