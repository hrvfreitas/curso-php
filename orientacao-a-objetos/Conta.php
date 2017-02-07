<?php
  class Conta {

      public $numero;
      public $saldo;
      public $limite;

}

$conta1 = new Conta;
$conta1->numero = 1234;
$conta1->saldo = 4321;
$conta1->limite = 99;

echo "Número da Conta: $conta1->numero\n";
echo "Saldo: $conta1->saldo\n";
echo "Limite: $conta1->limite\n";
