<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* 1. establecer la conexion */
        $conexion = mysqli_connect("127.0.0.1","root","");
        var_dump($conexion);
        
        //$conexion->query("use videoteca");
        $conexion->select_db("videoteca");
        var_dump($conexion);
                
        $resultado=$conexion->query("select * from actor");
        var_dump($resultado);
                /* 6. ver el resultado de todos los registros como array enumerado */
        $salidaArray=$resultado->fetch_all();
        var_dump($salidaArray);
        /* 5. rebobinar */
        $resultado->data_seek(0);
        
        /* 6. ver el resultado de todos los registros como array asociativo */
        $salidaArray=$resultado->fetch_all(MYSQLI_ASSOC);
        var_dump($salidaArray);
        
        /* listar un registro */
        $resultado->data_seek(0);
        $salidaArray = $resultado->fetch_assoc();
        var_dump($salidaArray);
        $salidaArray = $resultado->fetch_assoc();
        var_dump($salidaArray);
        
        ?>
    </body>
</html>
