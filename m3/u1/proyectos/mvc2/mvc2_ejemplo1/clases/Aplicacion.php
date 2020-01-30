<?php

namespace clases;

class Aplicacion {
    private $controlador;
    private $accion;
    private $valores;
    public static $url;
    public static $urlBase;
    public $errores;
    public $configuraciones;
    public $conexion;
   
    public function __construct($parametros) {
        $this->configuraciones=require_once($parametros);
        $this->conexion=new \clases\Consultas($this->configuraciones['baseDatos'][0]);
        $this->errores=FALSE;
        $this::$url=$_SERVER["SCRIPT_NAME"];
        $this::$urlBase=substr($this::$url,0,strrpos($this::$url, "/index.php"));
        $this->setControladorAccion();
        $this->setValores();
        $this->llamarControlador();
    }

    public function setControladorAccion() {
        $parametros = $_SERVER["PHP_SELF"];
        if ($parametros == $_SERVER["SCRIPT_NAME"]) {
            $this->controlador = $this->configuraciones['defectoControlador'];
            $this->accion = $this->configuraciones['defectoAccion'];
        } else {
            $longitud = strlen($_SERVER["SCRIPT_NAME"]);
            $parametros = substr($parametros, $longitud);
            $parametros = substr($parametros, strpos($parametros, "/") + 1);
            $parametros = explode("/", $parametros);
            $this->controlador = $parametros[0];
            $this->accion = $parametros[1];
        }
    }

    public function getControlador() {
        return $this->controlador;
    }

    public function getAccion() {
        return $this->accion;
    }

    public function llamarControlador() {
        $clase="\\controladores\\" . $this->getControlador() . "Controller";
        $controlador=new $clase($this);
        $accion = $this->getAccion() . "Accion";
        $controlador->$accion($this->valores);
    }

    public function setValores() {
        if ($_GET) {
            $this->valores = $_GET;
        } else {
            $this->valores = "";
        }
    }

    public function getValores() {
        return $this->valores;
    }

    public static function estilos($ruta) {
        $salida = '<style type="text/css">';
        $salida.= file_get_contents($ruta);
        $salida.='</style>';
        return $salida;
    }
    
    public function crearRuta($a){
        $valores= array_replace([
            "accion"=>"index",
            "controlador"=>"site"
        ], $a);
        
        return $this::$url . "/" . $valores["controlador"] . "/" . $valores["accion"];
    }
    
    public function setErrores($a){
        if(!empty($a)){
            $this->errores=TRUE;
        }
        $_SESSION["errores"]=$a;
    }
    
    public function getErrores(){
        if(!isset($_SESSION["errores"])){
            return "";
        }elseif(empty($_SESSION["errores"])){
            return " ";
        }else{
            return $this->mostrarErrores();
        }
    }
    
    private function mostrarErrores(){
        $salida="<ul>";
        foreach($_SESSION["errores"] as $error){
            $salida.="<li>$error</li>";
        }
        $salida.="</ul>";
        return $salida;
    }
    
    

}
