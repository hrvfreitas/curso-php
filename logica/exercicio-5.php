<?php

/*
*
**
***
****
*****

*/

for ($i=0; $i < 5; $i++) {
  for($j=0; $j < $i; $j++) {
    $linha .= "*"; // $linha
  }
  echo "$linha\n";
  $linha = "";
}
