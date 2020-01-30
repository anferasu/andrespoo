<?php

/**
 * Solucion con expresiones regulares
*/
function contarVocales($str) {
   
     return preg_match_all('/[aeiou]/i',$str);
            
}

//
//function uno($v){
//    if($v=='a'|$v=='b'){
//        return '-';
//    }else{
//        return 'no';
//    }
//}
//
//
//function dos(&$v){
//    if($v=='a'|$v=='b'){
//        $v="-";
//    }
//}

function contarVocalesmia($s){
    $contador=0;
    $minusculas= strtolower($s);
    
    /**
     * opcion 1
     */
    $vector= str_split($minusculas);
    
    //var_dump($vector);
    //$vector=array_map('uno', $vector);
    //array_walk($vector, 'dos');
    //var_dump($vector);
    foreach ($vector as $v) {
        switch ($v) {
            case 'a': 
            case 'e':                
               $contador++;
        }
    }
    
    /**
     * opcion 2
     */
    for($c=0;$c<strlen($minusculas);$c++){
        switch ($minusculas[$c]) {
            case 'a': 
            case 'e':                
               $contador++;
        }
    }
    
    return $contador;
}




$str = "En este texto de prueba hay VOCALES";

print_r("En la cadena " . "(" . $str .")" . " hay " . contarVocales($str). " vocales ");        
print_r("En la cadena " . "(" . $str .")" . " hay " . contarVocalesmia($str). " vocales ");        
        