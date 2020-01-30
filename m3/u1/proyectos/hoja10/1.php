 <!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Variables de conexion al servidor de mysql
        $equipo = "127.0.0.1";
        $nombre_usuario = "root";
        $contrasena = "";
        $conexion;
        $basedatos = "videoteca";
        $sconsulta;
        $tabla = "pelicula";
        $campos = "*";
        $consulta = "SELECT $campos FROM $tabla";

        function conectar_globales() {
            global $equipo;
            global $nombre_usuario;
            global $contrasena;
            global $conexion;
            global $basedatos;

            $conexion = mysqli_connect($equipo, $nombre_usuario, $contrasena,$basedatos)
                    or die("¡No se ha podido establecer la conexión con el servidor! - " . mysqli_connect_error($conexion));
        }

        function seleccionar() {
            global $basedatos;
            global $conexion;

            mysqli_select_db($conexion,$basedatos)
                    or die('No pudo seleccionarse la BD.');
            castellano();
        }

        function castellano() {
            global $conexion;
            //Coloco el codigo de caracteres para que salga en castellano
            mysqli_query($conexion,"SET NAMES 'utf8'");
        }

        function listar_registros() {
            global $sconsulta;
            global $sconsulta;
            $titulo = 1;

            echo '<table width="100%" border="1">';
            while ($fila = mysqli_fetch_assoc($sconsulta)) {
                if ($titulo) {
                    echo '<tr>';
                    foreach ($fila as $campo => $dato) {
                        echo '<td>';
                        echo $campo;
                        echo '</td>';
                    }
                    echo '</tr>';
                    $titulo=0;
                }
                echo '<tr>';
                foreach ($fila as $dato) {
                    echo '<td>';
                    echo $dato;
                    echo '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            mysqli_data_seek($sconsulta,0);
        }

        function consulta() {
            global $sconsulta;
            global $consulta;
            global $conexion;
            $sconsulta = mysqli_query($conexion,$consulta)
                    or die('No puedo realizar la consulta.' . mysqli_error($conexion));
        }

        conectar_globales();
        seleccionar();
        castellano();
        consulta();
        listar_registros();
        ?>
    </body>
</html>
