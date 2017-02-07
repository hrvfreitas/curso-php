<?php
for ($contador = 0; $contador < 101; $contador++) {
	{
		$multiplo4 = $contador % 4;
		if($multiplo4=="0")
		{
			echo "PIN";
		}
	}
  echo "$contador" . PHP_EOL;
}
