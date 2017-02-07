<?php
  class cartaoDeCredito {

      public $numero;
      public $dataDeValidade;

}

$cartaoDeCredito1 = new cartaoDeCredito;
$cartaoDeCredito1->numero = 111111;
$cartaoDeCredito1->dataDeValidade = "01/01/2013";


$cartaoDeCredito2 = new cartaoDeCredito;
$cartaoDeCredito2->numero = 22222;
$cartaoDeCredito2->dataDeValidade = "01/01/2014";



echo "Número do Cartão de Crédito: $cartaoDeCredito1->numero\n";
echo "Data de Validade: $cartaoDeCredito1->dataDeValidade\n";


echo "Número do Cartão de Crédito: $cartaoDeCredito2->numero\n";
echo "Data de Validade: $cartaoDeCredito2->dataDeValidade\n";
