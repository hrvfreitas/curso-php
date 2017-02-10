
<?php
class Conta {
   function __construct() {
       print "conta corrente\n";
       $this->name = "conta";
   }

   function __destruct() {
       print "apagando " . $this->name . "\n";
   }
}

$obj = new conta();
?>
