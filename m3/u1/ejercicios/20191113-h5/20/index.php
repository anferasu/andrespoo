<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
        /*window.addEventListener("load",function(){
           document.querySelector("#salida").innerHTML=(document.querySelector("#entrada").innerHTML).toUpperCase(); 
        });*/
        </script>
        <?php
            $fichero= file_get_contents("1.html");
        
        function ejercicio9($origen,$destino){
            $fichero= file_get_contents("1.html");
            $doc = new DOMDocument();
            $doc->loadHTML($fichero);
            $texto=$doc->getElementById($origen)->textContent;
            $doc->getElementById($destino)->textContent= strtoupper($texto);
            return $doc->saveHTML();
        }
                
        ?>
    </head>
    <body>
        <?= $fichero ?>
        <?= ejercicio9("entrada","salida"); ?>
    </body>
</html>
