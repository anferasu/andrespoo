<?php

/*
    function sumar_restar($num1, $num2) {
    $resultado = [
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2
    ];
    return $resultado;
    }

    $resultado_de_suma_resta = sumar_restar(20, 7);
    echo 'La suma es: ' . $resultado_de_suma_resta['suma'] . '<br/>';
    echo 'La resta es: ' . $resultado_de_suma_resta['resta'] . '<br/>';
  */
            
    function operaciones($num1, $num2){
   
        $resultado = [
        'suma' => $num1 + $num2,
        'resta' => $num1 - $num2,
        'producto' => $num1*$num2,
        'cociente'=>$num1/$num2,
        ];
        return $resultado;   
    }
     $resultado_operaciones = operaciones(20, 7);      
     
     
     foreach ($resultado_operaciones as $key => $value) {
           echo"<div>" . $key . ':' . $value . "</div>";
    }
     
    