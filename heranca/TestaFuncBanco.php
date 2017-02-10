<?php

require_once 'Funcionario.php';
require_once 'Telefonista.php';
require_once 'Secretaria.php';
require_once 'Gerente';

$gerente = new Gerente;
$gerente->nome = "Rafael Cosentino";
$gerente->salario = '2987';
$gerente->usuario = "rafacons_user";

$telefonista = new Telefonista;
$telefonista->nome = "Maria";
$telefonista->salario = "666";
$telefonista->estacaoDeTrabalho = "386DX40mhz";

$secretaria = new Secretaria;
$secretarta->nome = "Fatima";

$bonus = $funcionario->calculaBonus();
echo "Bonus: $bonus" . PHP_EOL;

echo "nome gerente: $gerente->nome" . PHP_EOL;
echo "salario gerente: $gerente->salario" . PHP_EOL;
echo "passwd: $gerente->usario" . PHP_EOL;


echo "nome gerente: $telefonista-->nome" . PHP_EOL;
echo "salario gerente: $gerente->salario" . PHP_EOL;
echo "passwd: $gerente->usario" . PHP_EOL;


 ?>
