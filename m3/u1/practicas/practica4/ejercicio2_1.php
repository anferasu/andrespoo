<!DOCTYPE html>
<?php
  
     require  'clases/Vocales.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
         <div>
            <form method="post" action="ejercicio2.php">
                <h1>Cuenta vocales en una cadena de texto</h1>
                <div>
                <label for="a" >Ingrese un texto</label>
                <input id="a" name ="itexto" type="text">
                </div>
                <button name="boton">Enviar</button>                    
            </form>
        </div>
        
        <?php
        if (isset($_POST['boton'])){
            $texto = $_POST['itexto'];
            var_dump($texto);
            $a = new Vocales($texto);
            echo 'El mumero de vocales es: ' . $a->getVocales();
            
         }
        ?>
    </body>
</html>
