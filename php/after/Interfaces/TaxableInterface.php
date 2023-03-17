<?php

namespace App\Interfaces;

interface TaxableInterface 
{
  public function getInflation(): float;
}