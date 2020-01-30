<?php 

/*
 * funcion que trae el un array del directorio actual con esta variable $dir_handle='.' 
 * si se le pasa una cadena con otra ruta muestra los directorios de esa cadena
 */

function leerDirectorio($dir_handle='.') {
    
// abre el directorio
$dir_handle = opendir($dir_handle); 
  
// lee el contenido del directorio 
while(($file_name = readdir($dir_handle)) !== false)  
{  
     $vector[] = strtolower($file_name); 
} 
   
// cierra el directorio
closedir($dir_handle);
sort($vector);
return ($vector);
}

$string = 'c:/Program Files';
var_dump(leerDirectorio());
var_dump(leerDirectorio($string));