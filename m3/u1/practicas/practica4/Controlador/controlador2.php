<?php
 
     require  'clases/Vocales.php';

     if (isset($_POST['boton'])){
            $texto = $_POST['itexto'];
            var_dump($texto);
            $a = new Vocales($texto);
            echo 'El mumero de vocales es: ' . $a->getVocales();
            $content2 = 'Vista/formulario2.php';
            
         }
?>
