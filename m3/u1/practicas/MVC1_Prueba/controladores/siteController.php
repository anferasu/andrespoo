<?php

namespace controladores;

class siteController extends Controller {

    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "Esta Pagina forma parte del curso Desarrollo de Aplicaciones con tecnologias Web";
         $bd = new \clases\Bd();
        $this->miPie.=" <br> " . $bd->getMensaje();
        $this->miMenu = [
            "Inicio" => $this->crearRuta(["accion" => "index"]),
            "Examen de PHP" => $this->crearRuta(["accion" => "paso1"]),
        ];
    }

    public function indexAccion() {
       
        $this->render([
            "vista" => "index",
            "pie" => $this->miPie,
            "menu" => (new \clases\Menu($this->miMenu, "Inicio"))->html(),
            "menu1" => (new \clases\Menu([
                        "Examen de PHP" => $this->crearRuta(["accion" => "paso1"]),
                        ], "Inicio"))
                    ->html()
        ]);
    }

    public function paso1Accion($datos) {
        //var_dump($datos);        
        //var_dump($datos->getValores());
        $v = "";
               
        if (empty($datos->getValores())) {
            $vista = "ejercicio1";
            $pie = $this->miPie;
                      
        }else{
            $vista='ejercicio2';
            $pie="";
            $v = new \clases\E1($datos->getValores()['caja']);
            
            
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Examen de PHP"))->html(),
            "resultado" => $v,
        ]);
    }
    
    public function paso2Accion($datos) {
        $v = "";
        if (empty($datos->getValores())) {
            $vista = "ejercicio2";
                      
        }else{
            $vista='ejercicio3';
            $v = new \clases\Numeros($datos->getValores()['valores']);
            $v->escribirFichero();
            
            
        }

        $this->render([
            "vista" => $vista,
            "pie" => $this->miPie,
            "menu" => (new \clases\Menu($this->miMenu, "Examen de PHP"))->html(),
            "resultado" => $v,
        ]);
    }

      
}
