<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            table{
                width:800px;
                margin: 50px auto;
            }
        </style>

    </head>
    <body>
        <?php

        class Conexion {

            public $equipo;
            public $nombre_usuario;
            public $contrasena;
            public $conexion;
            public $basedatos;
            public $sconsulta;
            public $tabla;
            public $campos;
            public $consulta;

            function __construct() {
                $this->equipo = $equipo;
                $this->nombre_usuario = $nombre_usuario;
                $this->contrasena = $contrasena;
                $this->basedatos = $basedatos;
                $this->conectar();
            }
            
            public function crearConsulta(){
                $this->consulta="SELECT $this->campos FROM $this->tabla;";
            }
            
            public function setTabla($tabla) {
                $this->tabla = $tabla;
                $this->crearConsulta();
            }

            public function setCampos() {
                $this->campos = $campos;
                $this->crearConsulta();
            }

            public function conecta() {
                if (empty($this->basedatos)) {
                    $this->conexion = new mysqli($this->equipo, $this->nombre_usuario, $this->contrasena)
                            or die("¡No se ha podido establecer la conexión con el servidor! - " . $this->conexion->error);
                } else {
                    $this->conexion = new mysqli($this->equipo, $this->nombre_usuario, $this->contrasena, $this->basedatos)
                            or die("¡No se ha podido establecer la conexión con el servidor! - " . $this->conexion->error);
                }
            }

            public function seleccionar() {
                $this->conexion->select_db($this->basedatos)
                        or die('No pudo seleccionarse la BD.' . $this->conexion->error);
                $this->castellano();
            }

            public function castellano() {
                $this->conexion->query("SET NAMES 'utf8'");
            }

            public function listar_registros() {
                $titulo = 1;

                echo '<table width="100%" border="1">';
                while ($fila = $this->fetch_assoc()) {
                    if ($titulo) {
                        echo '<tr>';
                        foreach ($fila as $campo => $dato) {
                            echo '<td>';
                            echo $campo;
                            echo '</td>';
                        }
                        echo '</tr>';
                        $titulo = 0;
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
                $this->data_seek(0);
            }

            public function consulta() {
                echo $this->consulta;
                $this->sconsulta = $this->query($this->consulta)
                         or die('No puedo realizar la consulta.' . $this->conexion->error);
            }
            
            public function __destruct() {
                $this->conexion->close();
            }

        }
        /* Aqui debemos colocar el codigo para utilizar la clase */
        
        ?>
    </body>
</html>
