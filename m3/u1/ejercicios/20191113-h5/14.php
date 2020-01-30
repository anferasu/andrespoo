<?php

function numeros($minimo=1, $maximo=50)
{
	$resultado =[];
	for($i=$minimo;$i<=$maximo;$i++)
	{
	    //$resultado[]=$i;
            array_push($resultado,$i);
        }
	return array_sum($resultado);
}
echo "<pre>";
print_r ("La suma del array es: " . numeros());
echo "</pre>";