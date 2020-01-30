<?php

//este es el que vamos a utilizar para arreglos

function sumar($argumentos) {
   
    $salida=0;
    
    foreach ($argumentos as $v) {
        $salida+=$v;
    }
    return $salida;
    }

    $resultado_de_suma_resta = sumar([20, 7]);
    echo "<div> $resultado_de_suma_resta </div>";
    
    $resultado_de_suma_resta = sumar([20, 3, 12, 2 ]);
    echo "<div> $resultado_de_suma_resta </div>";
    