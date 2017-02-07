<?php
// corrigido
for($i = 1; $i <= 100; $i++ ) {
  if($i % 2 == 1) {
    echo "$i - *" . PHP_EOL;
  } else {
    echo "$i - **" . PHP_EOL;
  }
}
