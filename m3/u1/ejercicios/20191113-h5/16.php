<?php

function resultado($numero1, $numero2) {
    global $resultado;
    $resultado= $numero1 ." , ". $numero2; 
    return $resultado;  
}
resultado(12, 15);
echo $resultado;

