<?php

function aleatorioNumeros($minimo=1, $maximo=100, $contador=10)
{
	$nums = range($minimo, $maximo);
	shuffle($nums);
	$resultado = array();
	for($i=0;$i<$contador && $i<count($nums);$i++)
	{
		array_push($resultado, $nums[$i]);
	}
	
	return $resultado;
}
echo "<pre>";
print_r(aleatorioNumeros());
echo "</pre>";