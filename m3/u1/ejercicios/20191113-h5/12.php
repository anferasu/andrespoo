<?php

function reversoTexto (){
    
    global $a;
    
    return  strrev($a);//escribe el string de atras para adelante abeurP
    
    
}
$a = "Prueba";
print_r(reversoTexto($a));
