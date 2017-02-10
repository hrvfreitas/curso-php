<?php

require_once 'Secretario.php';
require_once 'Gerente.php';


$gerente = new Gerente;
$gerente->nome = "Joelma";
$gerente->salario = 1200;
$gerente->senha = 3654;

$secretario = new Secretario;
$secretario->nome = "João";
$secretario->salario = 200;
$secretario->ramal = 6666;

echo "nome gerente: $gerente->nome" . PHP_EOL;
echo "salario gerente: $gerente->salario" . PHP_EOL;
echo "passwd: $gerente->senha" . PHP_EOL;


 ?>
