<?php


  class Conta {

    public $numero;
    public $saldo;

    public function deposita($valor)
    {
      $this->saldo += $valor;
    }
    public function saca($valor)
    {
      if($valor <= $this->saldo)}
      $this->saldo -= $valor;
      return TRUE;
    }

  }
 ?>
