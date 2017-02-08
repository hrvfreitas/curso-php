<?php
Class Aluno{
  public $nome;
  public $rg;
  public $dataDeNascimento;
}
Class Turma{
  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;
}
$aluno = new Aluno;
$aluno->nome = "Rafael Cosentino";
$aluno->rg = 111111;
$aluno->dataDeNascimento = "30/10/1984";
$turma->periodo = "Manha";
$turma->serie = "5";
$turma->sigla = "B";
$turma->tipoDeEnsino = "Fundamental";
echo "Turma do aluno: {$aluno->dono->periodo}\n";
