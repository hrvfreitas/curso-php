<?php

require_once 'Conta.php';

$conta = new Conta;
$conta->numero = 13;
//deposito de 700
$conta->deposita(700);

echo "Saldo após deposito: $conta->saldo" . PHP_EOL;

$contaconta->saca(800)

echo "Saldo após o saque: $conta->saldo" . PHP_EOL;
 ?>
