<?php

$numero1=0;
$numero2=0;
$numero3=0;
$salida1=0;
$salida2=0;
$salida3=0;

$numero1 = $_REQUEST['num1'];
$numero2 = $_REQUEST['num2'];
$numero3 = $_REQUEST['num3'];

if ($numero1<=$numero2 && $numero2<=$numero3) {
    $salida1 = $numero3;
    $salida2 = $numero2;
    $salida3 = $numero1;
}elseif ($numero2<=$numero1 && $numero1<=$numero3){
    $salida1 = $numero3;
    $salida2 = $numero1;
    $salida3 = $numero2;
}elseif ($numero3<=$numero1 && $numero1<=$numero2){
    $salida1 = $numero2;
    $salida2 = $numero1;
    $salida3 = $numero3;
}elseif ($numero1<=$numero3 && $numero3<=$numero2){
    $salida1 = $numero2;
    $salida2 = $numero3;
    $salida3 = $numero1;
}elseif ($numero3<=$numero1 && $numero3>=$numero2){
    $salida1 = $numero1;
    $salida2 = $numero3;
    $salida3 = $numero2;
}else{
    $salida1 = $numero1;
    $salida2 = $numero2;
    $salida3 = $numero3;
}
echo "Ordenar numeros de forma descendente  $salida1 , $salida2 , $salida3";    
