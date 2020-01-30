<?php
/*
 * funcion que trae un array y lo carga en $array
 * valor $devolverTodos =false que devuleve en un array los repetidos con un value y un numero de repeticiones
 * si el valor $devolverTodos  es true trae todos los elementos con value y numero de repeticiones
 */
function elementosRepetidos($array, $devolverTodos =false) {
    $repetidos=[];
    foreach ((array)$array as $value) {
        $inArray = false;
        foreach ($repetidos as $key => $v) {
            if($v['value']===$value){
                $inArray=true;
                ++$repetidos[$key]['numero'];
            }
        }
        if (false === $inArray){
            //$key= count($repetidos);
            //$repetidos[$key]=[];
            array_push($repetidos,[
                'value'=>$value,
                'numero'=>1
            ]);
            //$repetidos[$key]['value']=$value;
            //$repetidos[$key]['numero'] = 1;
        }
    }
        
        if (!$devolverTodos){
            foreach ($repetidos as $i => $vItem) {
                if($vItem['numero'] === 1){
                    unset($repetidos[$i]);
                }
            }
        }
    
    sort($repetidos);
    return $repetidos;
}

var_dump(elementosRepetidos([1,2,2,3,5,6,1],true));
var_dump(elementosRepetidos([1,2,2,3,5,6,1]));

