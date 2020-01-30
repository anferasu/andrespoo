<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $enlaces = [
            [
                'clase' => 'caja1',
                'url' => '1.php',
                'etiqueta' => 'Ejercicio 1'
            ],
            [
                'clase' => 'caja2',
                'url' => '2.php',
                'etiqueta' => 'Ejercicio 2'
            ],
            [
                'url' => '3.php',
                'etiqueta' => 'Ejercicio 3'
            ],
            [
                'clase' => 'caja4',
                'url' => '4.php',
                'etiqueta' => 'Ejercicio 4'
            ],
            [
                
                'url' => '5.php',
                'etiqueta' => 'Ejercicio 5'
            ]
        ];
        //$enlaces[0]['etiqueta'];
        echo "<div>";
        echo"<ul>";
        for ($contador = 0; $contador < count($enlaces); $contador++) {

            if(isset($enlace['clase'])){
                echo '<li class="'.$enlace["clase"].'">';
            }else{
                    echo '<li>';
            }
                //<li><a href="1.php"> Ejercicio1</a></li>
                echo '<a " href="' . $enlaces[$contador]["url"] . '">' . $enlaces[$contador]["etiqueta"] . '</a>';
            echo"</li>";
        }
        echo"</ul>";
        echo "</div>";
        ?>
        --------
        <?php
        /*opcion 2*/
        echo "<ul>";
        foreach ($enlaces as $enlace) {
            if(isset($enlace['clase'])){
                echo '<li class="'.$enlace["clase"].'">';
            }else{
                    echo '<li>';
            }
            echo '<a href ="'.$enlace["url"].'">'.$enlace["etiqueta"].'</a>';
            echo "</li>";
        }
        
        ?>
        
    </body>
</html>
