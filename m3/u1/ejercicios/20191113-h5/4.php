<?php
function numerosSuma($numero1, $numero2, $numero3)
{
	$resultado = $numero1 + $numero2 + $numero3;
                  
	return $resultado;
}
echo "<pre>";
print_r("La suma es:" . numerosSuma(1, 100, 50));
echo "</pre>";

