<?php

function aleatorioNumeros($v)
{
    $mensaje="";
    $hayNegativos=0;
    foreach ($v as $valor) {
        if ($valor <0 ){
               $hayNegativos=1;
               break;
        }
    }
    if($hayNegativos){
        $mensaje="Hay Negativos";
    }else{
        $mensaje="Todos positivos";
    }
    
    return $mensaje;
	
}


$vector=[
    1,2,-3,4,5,6
];

var_dump(aleatorioNumeros($vector));


