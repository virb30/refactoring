<?php

use App\Classes\Bank;
use App\Classes\Cnpj;
use App\Classes\Cpf;
use PHPUnit\Framework\TestCase;

class BankTest extends TestCase
{
  public function testBankClassHasCorrectFinalPriceForCpf()
  {
    $cpf = new Cpf();
    $sut = new Bank($cpf);
    $price = 5;

    $result = $sut->calculateFinalPrice($price);
    $expected = 5;

    $this->assertEquals($expected, $result);
  }

  public function testBankClassHasCorrectFinalPriceForCnpj()
  {
    $cpf = new Cnpj();
    $sut = new Bank($cpf);
    $price = 5;

    $result = $sut->calculateFinalPrice($price);
    $expected = 6;

    $this->assertEquals($expected, $result);
  }
}