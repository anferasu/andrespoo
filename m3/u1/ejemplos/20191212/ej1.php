<?php
require_once 'Texto.php'; //cargando la clase

$a = new Texto("Ejemplo de cadena");//creando un objeto
$b = new Texto();

echo $a ->getCadena(true);
echo $b ->getCadena(1);

echo $a->getNumeroVocales();
$b->setCadena("texto para hacer pruebas");
echo $b->getCadena(true);
echo $b->getNumeroVocales();
echo $b->getNumeroNoVocales(); 