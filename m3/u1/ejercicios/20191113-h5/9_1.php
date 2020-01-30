<?php

function aleatorioNumeros($v,&$negativos)
{
    $mensaje="";
    $hayNegativos=0;
    $negativos=[];
    foreach ($v as $indice=>$valor) {
        if ($valor <0 ){
               $hayNegativos=1;
               $negativos[$indice]=$valor;
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
    -1,2,-3,4,5,6
];
$negativos=[];

var_dump(aleatorioNumeros($vector,$negativos));
var_dump($negativos);

var_dump(aleatorioNumeros([1,3,5,6,7],$negativos));
var_dump($negativos);


