<?php

namespace clases;

class Aplicacion {
    private $controlador;
    private $accion;
    private $valores;
    public static $url;
    public static $urlBase;
    public $errores;
   
    public function __construct() {
        $this->errores=FALSE;
        $this::$url=$_SERVER["SCRIPT_NAME"];
        $this::$urlBase=substr($this::$url,0,strrpos($this::$url, "/index.php"));
        //var_dump($this::$url);
        //var_dump($this::$urlBase);
        $this->setControladorAccion();
        $this->setValores();
        $this->llamarControlador();
    }

    public function setControladorAccion() {
        $parametros = $_SERVER["PHP_SELF"];
        if ($parametros == $_SERVER["SCRIPT_NAME"]) {
            $this->controlador = "site";
            $this->accion = "index";
        } else {
            $longitud = strlen($_SERVER["SCRIPT_NAME"]);
            $parametros = substr($parametros, $longitud);
            $parametros = substr($parametros, strpos($parametros, "/") + 1);
            $parametros = explode("/", $parametros);
            //var_dump($parametros);
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
        $controlador=new $clase();
        $accion = $this->getAccion() . "Accion";
        $controlador->$accion($this);
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
