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

            function __construct($equipo = "127.0.0.1", $nombre_usuario = "root", $contrasena = "", $basedatos = "") {
                $this->equipo = $equipo;
                $this->nombre_usuario = $nombre_usuario;
                $this->contrasena = $contrasena;
                $this->basedatos = $basedatos;
                $this->conectar();
            }

            public function crearConsulta() {
                $this->consulta = "SELECT $this->campos FROM $this->tabla;";
            }

            public function setTabla($tabla) {
                $this->tabla = $tabla;
                $this->crearConsulta();
            }

            public function setCampos($campos) {
                $this->campos = $campos;
                $this->crearConsulta();
            }

            public function conectar() {
                if (empty($this->basedatos)) {
                    $this->conexion = new mysqli($this->equipo, $this->nombre_usuario, $this->contrasena);
                } else {
                    $this->conexion = new mysqli($this->equipo, $this->nombre_usuario, $this->contrasena, $this->basedatos);
                }
                 if($this->conexion->connect_error){
                    die("¡No se ha podido establecer la conexión con el servidor! - " . $this->conexion->connect_error);
                }
            }

            public function seleccionar() {
                $this->conexion->select_db($this->basedatos)
                        or die('No pudo seleccionarse la BD.');
                $this->castellano();
            }

            public function castellano() {
                $this->conexion->query("SET NAMES 'utf8'");
            }

            public function listar_registros() {
                $titulo = 1;

                echo '<table width="100%" border="1">';
                while ($fila = $this->sconsulta->fetch_assoc()) {
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
                $this->sconsulta->data_seek(0);
            }

            public function consulta() {
                echo $this->consulta;
                $this->sconsulta = $this->conexion->query($this->consulta)
                        or die('No puedo realizar la consulta.' . $this->conexion->error);
            }

            public function listar_registros_select($campoEnviar,$camposMostrar, $nombre) {
                echo '<select name="' . $nombre . '">';
                while ($fila = $this->sconsulta->fetch_array()) {
                    echo '<option value="';
                    echo $fila[$campoEnviar];
                    echo '">';
                    echo $this->unirResultados($fila, $camposMostrar);
                    echo '</option>';
                }
                echo "</select>";
                $this->sconsulta->data_seek(0);
            }
            
             public function listar_registros_lista($campoEnviar,$camposMostrar, $nombre,$tamano="5") {
                echo '<select name="' . $nombre . '" size="' . $tamano . '">';
                while ($fila = $this->sconsulta->fetch_array()) {
                    echo '<option value="';
                    echo $fila[$campoEnviar];
                    echo '">';
                    echo $this->unirResultados($fila, $camposMostrar);
                    echo '</option>';
                }
                echo "</select>";
                $this->sconsulta->data_seek(0);
            }
            
            private function unirResultados($fila,$camposMostrar){
                $salida="";
                if(!is_array($camposMostrar)){
                    $camposMostrar=explode(",",$camposMostrar);
                }
                foreach ($camposMostrar as $v){
                    $salida.= " " . $fila[$v];
                }
                return $salida;
            }
            
            public function liberarResultados(){
                $this->sconsulta->close();
            }

            public function __destruct() {
                $this->conexion->close();
            }

        }
        
        if(isset($_REQUEST["formulario"])){
            
        }

        $objeto = new Conexion();
        $objeto->basedatos = "videoteca";
        $objeto->seleccionar();
        $objeto->setCampos("*");
        $objeto->setTabla("director");
        $objeto->consulta();
        $objeto->listar_registros();
        $objeto->listar_registros_select("id", "id,nombre,apellidos" , "idDirector");
        $objeto->listar_registros_lista("id", "id,nombre,apellidos" , "idDirector");
        $objeto->liberarResultados();
        echo "<br />--------------------------------<br />";
        $objeto->setTabla("actor");
        $objeto->consulta();
        $objeto->listar_registros();
        $objeto->listar_registros_select("id", "id,nombre,apellidos" , "idActor");
        $objeto->listar_registros_lista("id", "id,nombre,apellidos" , "idActor",7);
        
        ?>
    </body>
</html>
