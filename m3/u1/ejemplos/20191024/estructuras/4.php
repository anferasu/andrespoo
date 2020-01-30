<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //array enumerado
        $numeros[0]=23;
        $numeros[10]=33;
        
        //array asociativo
        
        $colores=[
            "rojo"=> 23,
            "azul"=> 54,
            "verde"=>3
        ];
        
        //echo count($numeros); lee la longitud del array
        //para ver el indice del array en el foreach se utiliza $indice=>$value
        foreach ($numeros as $indice=>$value) {
            echo "<div> $indice:$value </div>";
        }
        foreach ($colores as $indice=>$value){
            echo "<div> $indice:$value </div>";
        }
        //acceder a un elemnto del array
        echo $colores["rojo"];
        
        ?>
    </body>
</html>
