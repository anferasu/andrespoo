<?php
namespace controladores;

class siteController extends Controller{
    
public function indexAccion($datos){
        $this->aplicacion->conexion->ejecutar("Select * from noticias");
        $modelo=$this->aplicacion->conexion->findAll('Noticias');
      $this->render([
          "vista"=>"index",
          "contenido"=>$modelo,
          "pie"=>"Ejemplo de modelos",
          "menu"=>(new \clases\Menu([
            "Index"=>$this->crearRuta(["accion"=>"index"]),
            "Entradas"=>$this->crearRuta(["accion"=>"entradas"])
        ],"Index"))->html()
    ]);
    }
    
    public function entradasAccion($datos){
        $this->aplicacion->conexion->ejecutar("Select * from entradas");
        $modelo=$this->aplicacion->conexion->findAll('Entradas');
      $this->render([
          "vista"=>"index",
          "contenido"=>$modelo,
          "pie"=>"Ejemplo de modelos",
          "menu"=>(new \clases\Menu([
            "Index"=>$this->crearRuta(["accion"=>"index"]),
            "Entradas"=>$this->crearRuta(["accion"=>"entradas"])
        ],"Entradas"))->html()
    ]);
    }



}
