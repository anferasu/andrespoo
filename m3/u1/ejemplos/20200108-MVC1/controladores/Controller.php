<?php
namespace controladores;

class Controller {
    public $layout;
    public $vista;
    private $url;
    private $urlBase;
    
    public function __construct() {
        $this->layout="layout";
        $this->vista="index";
        $this->url=$_SERVER["SCRIPT_NAME"];
        $this->urlBase=substr($this->url,0,strrpos($this->url, "/index.php"));
    }
    
    public function render($parametros){
        foreach ($parametros as $campos=>$valores){
            $this->$campos=$valores;
        }
        require_once("plantillas/" . $this->layout. ".php");
    }
    
    public function crearRuta($a){
        $valores= array_replace([
            "accion"=>"index",
            "controlador"=>"site"
        ], $a);
        
        return $this->url . "/" . $valores["controlador"] . "/" . $valores["accion"];
    }
}
