<?php

  require  'clases/Numeros.php';
  
  if (isset($_POST['boton'])){
            $inumero1 = $_POST['inumero1'];
            $inumero2 = $_POST['inumero2'];
            $inumero3 = $_POST['inumero3'];
            $array = [$inumero1, $inumero2, $inumero3];
            $a = new  Numeros($array);
            $a->getImprimir();
            $content='Vista/mostrar.php';
        }else{
            $content='Vista/formulario.php';
 }
       
        
