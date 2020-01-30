<?php

function producto (){
    
    global $a;
    
    return array_product($a);
    
    
}
$a = [1,2,3,4];
print_r("El producto del arreglo es: " . producto($a));
