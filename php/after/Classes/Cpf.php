<?php

namespace App\Classes;

use App\Interfaces\TaxableInterface;

class Cpf implements TaxableInterface
{
  protected float $inflation = 1;

  public function getInflation(): float
  {
    return $this->inflation;
  }
}