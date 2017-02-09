<?php
$numeros = array(40, 60, 5);
echo array_sum($numeros) / count(array_filter($numeros)) . PHP_EOL;
