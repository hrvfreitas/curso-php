<?php
for($i=0;$i<=100;$i++)
{
	$numpar = $i % 2;
	if($numpar=="0")
	{
		echo "$i *";
	}
}
for($i=0;$i<=100;$i++)
{
	$numimpar= $i % 2;
	if($numimpar=!"0")
	{
		echo "$i **\n";
	}
}
