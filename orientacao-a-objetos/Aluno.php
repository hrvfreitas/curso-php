<?php
  class Aluno {

      public $nome;
      public $rg;
      public $dataDeNascimento;

}

$aluno1 = new Aluno;
$aluno1->nome = "Marcelo Martins";
$aluno1->rg = "33333333-3";
$aluno1->dataDeNascimento = "02/04/1985";

$aluno2 = new Aluno;
$aluno2->nome = "Rafael Cosentino";
$aluno2->rg = "222222222-2";
$aluno2->dataDeNascimento = "30/10/1984";

echo "Nome: $aluno1->nome\n";
echo "RG: $aluno1->rg\n";
echo "Data de Nascimento: $aluno1->dataDeNascimento\n";

echo "Nome: $aluno2->nome\n";
echo "RG: $aluno2->rg\n";
echo "Data de Nascimento: $aluno2->dataDeNascimento\n";
