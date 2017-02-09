<?php

require_once 'Conta.php';
require_once 'Agencia.php';

$agencia13 = new Agencia;
$agencia13->numero = 178;
$conta13 = new Conta;
$conta13->numero = 123;
$conta13->saldo = 1000.00;
$conta13->limite = 500;
$conta13->agencia = $agencia13;


echo "conta de nº $conta13->numero e agencia {$conta13->agencia->numero}" . PHP_EOL;
