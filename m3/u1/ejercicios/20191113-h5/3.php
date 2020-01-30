<?php
function numeros($minimo, $maximo)
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
print_r(numeros(1, 100));
echo "</pre>";

