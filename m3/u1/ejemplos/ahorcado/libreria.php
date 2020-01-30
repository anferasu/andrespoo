<?php
function obtenerPalabra($palabras){
    $numero=rand(0,count($palabras)-1);
    $palabra=$palabras[$numero];
    return $palabra;
}

function encontrar($caracter,$vector){
    foreach ($vector as $v) {
        if($v==$caracter){
            return 1;
        }
    }
    return 0;
}

function jugar($palabra,$letra,$anteriores){
    $palabra= str_split($palabra);
    $salida=" ";
    $esta=encontrar($letra,$anteriores);
    $numero=0;
    foreach ($palabra as $posicion=>$caracter) {
        if($caracter==$letra && !$esta){
            $numero++;
            $salida.="<div>$letra</div>";
        }else{
            $encontradoAnterior=0;
            foreach ($anteriores as $v) {
                if($caracter==$v){
                    $salida.="<div>$v</div>";
                    $encontradoAnterior=1;
                    break;
                }
            }
            if(!$encontradoAnterior){
                $salida.="<div>&nbsp</div>";
            }
        }
    }
    return [
        $salida,
        $numero,
        ];
}

function dibujar($palabra){
    $salida=" ";
    for($c=0;$c<strlen($palabra);$c++){
        $salida.="<div>&nbsp</div>";
    }
    return $salida;
}

function dibujarFallos($fallos){
    $salida="";
    foreach ($fallos as $caracter) {
        $salida.="<div>$caracter</div>";
    }
    return $salida;
}

