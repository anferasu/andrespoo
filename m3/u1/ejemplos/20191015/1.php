<?php

$numero1=0;
$numero2=0;
$numero3=0;
$salida=0;

$numero1 = $_REQUEST ['uno'];
$numero2 = $_REQUEST ['dos'];
$numero3 = $_GET ['tres'];

if ($numero1>$numero2 && $numero1>$numero3){
    
    $salida = $numero1;
}elseif ($numero2>$numero3) {

    $salida = $numero2;
}else{
    $salida = $numero3;
}

echo 'El numero mayor es:', $salida;

echo "El numero mayor es $salida";
/* echo $numero1 . " " ;
echo $numero2 . " ";
echo $numero3 . " "; 
echo  "$numero1 $numero2 $numero3"
 */

/*depurar lo que hay en pantala*/
echo "<pre>";
var_dump($_GET);
echo "</pre>";


/*arary asociativo*/
/*
$silla=[
    "color" =>"azul",
    "peso" => "20",    
];

$silla["peso"];
$silla ->peso; 
*/
