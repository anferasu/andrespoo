<?php

function numeros($minimo=1, $maximo=100)
{
	$resultado =[];
	for($i=$minimo;$i<=$maximo;$i++)
	{
	    //$resultado[]=$i;
            array_push($resultado,$i);
        }
	return $resultado;
}
echo "<pre>";
print_r(numeros());
echo "</pre>";