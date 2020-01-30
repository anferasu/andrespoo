
<?php

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$conexion=new mysqli("127.0.0.1","root","","h1");
$consulta=$conexion->query("Select * from entradas");
//$salida=$consulta->fetch_all());
//echo $salida[0]['id'];
//$salida=$consulta->fetch_object());
//echo $salida->id;

$salida[]=$consulta->fetch_object("\\Entradas");
$salida[]=$consulta->fetch_object("\\Entradas");
$salida[]=$consulta->fetch_object("\\Entradas");
var_dump($salida);



