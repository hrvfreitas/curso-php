<?php

require_once 'Funcionario.php';

class Gerente extends Funcionario

{

  public $usuario;
  public $senha;
  public function calculaBonus()
  {
    return $this->salario * 0.4 + 2*self::PORCENTAGEM_DO_BONUS
  }
}

 ?>
