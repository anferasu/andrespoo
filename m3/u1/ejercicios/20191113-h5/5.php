<?php

function numerosProducto($numero1, $numero2, $numero3)
{
	$resultado = $numero1 * $numero2 * $numero3;
                  
	return $resultado;
}
echo "<pre>";
print_r("el producto es:" . numerosProducto(1, 100, 50));
echo "</pre>";

