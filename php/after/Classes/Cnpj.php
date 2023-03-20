<?php

namespace App\Classes;

use App\Interfaces\TaxableInterface;

class Cnpj implements TaxableInterface
{
  protected float $inflation = 1.2;

  public function getInflation(): float
  {
    return $this->inflation;
  }
}