<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       global $conexion;
       $conexion = mysqli_connect("127.0.0.1","root","");
      
        //$conexion->query("use videoteca");
        $conexion->select_db("videoteca");
      
                
        $resultado=$conexion->query("show tables");
    
        
        $salidaArray=$resultado->fetch_all();
  
        echo '<ul>';
           foreach ($salidaArray as $campo => $dato) {
                echo '<li>';
                echo '<a href= "';
                echo '2_mostrar.php?tabla=' . $campo ;
                echo '">'.$dato[0].'</a>';
                echo '</li>';
             }
                echo '</ul>';
        
        ?>
        
      
    </body>
</html>
