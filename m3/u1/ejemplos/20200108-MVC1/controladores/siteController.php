<?php

namespace controladores;

class siteController extends Controller {

    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "Ejercicios Practica 4";
        $this->miMenu = [
            "Inicio" => $this->crearRuta(["accion" => "index"]),
            "Ejercicio 1" => $this->crearRuta(["accion" => "ejercicio1"]),
            "Ejercicio 2" => $this->crearRuta(["accion" => "ejercicio2"]),
            "Ejercicio 3" => $this->crearRuta(["accion" => "ejercicio3"]),
            "Ejercicio 4" => $this->crearRuta(["accion" => "ejercicio4"]),
            "Ejercicio 5" => $this->crearRuta(["accion" => "ejercicio5"]),
            "Ejercicio 6" => $this->crearRuta(["accion" => "ejercicio6"]),
        ];
    }

    public function indexAccion() {
        $this->render([
            "vista" => "index",
            "pie" => $this->miPie,
            "menu" => (new \clases\Menu($this->miMenu, "Inicio"))->html(),
            "menu1" => (new \clases\Menu([
                        "Ejercicio 1" => $this->crearRuta(["accion" => "ejercicio1"]),
                        "Ejercicio 2" => $this->crearRuta(["accion" => "ejercicio2"]),
                        "Ejercicio 3" => $this->crearRuta(["accion" => "ejercicio3"]),
                        "Ejercicio 4" => $this->crearRuta(["accion" => "ejercicio4"]),
                        "Ejercicio 5" => $this->crearRuta(["accion" => "ejercicio5"]),
                        "Ejercicio 6" => $this->crearRuta(["accion" => "ejercicio6"]),
                            ], "Inicio"))
                    ->html()
        ]);
    }

    public function ejercicio1Accion($datos) {
        //var_dump($datos);        
        //var_dump($datos->getValores());
        $v = "";

        if (empty($datos->getValores())) {
            $vista = "ejercicio1";
            $pie = $this->miPie;
        } else {
            //entro si llegan datos
            $pie = "Estaban ordenados ascendentemente";
            $vista = "resultadoEjercicio1";
            $v = $datos->getValores()['numero'];
            sort($v);
            if ($v !== $datos->getValores()['numero']) {
                $pie = "No estaban ordenados ascendentemente";
            }
            $v = join(",", $v);
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 1"))->html(),
            "resultado" => $v,
        ]);
    }

    public function ejercicio2Accion($datos) {
        $vista = "ejercicio2";
        $pie = "Ejercicio2";
        $salida = 0;

        if (!empty($datos->getValores())) {

            $vista = "resultadoEjercicio2";
            $pie = $this->miPie;
            $vocales = [
                'a',
                'e',
                'i',
                'o',
                'u',
                'á',
                'é',
                'í',
                'ó',
                'ú',
            ];

            $salida = 0;
            foreach ($vocales as $v) {
                $salida += substr_count($datos->getValores()['frase'], $v);
            }
        }

        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 2"))->html(),
            "resultado" => $salida,
        ]);
    }

    public function ejercicio3Accion($datos) {
        $vista = "ejercicio3";
        $pie = "Ejercicio3";
        $salida = "";
        $numeros="";

        if(empty($datos->getValores())){
            $_SESSION["numeros"] = [];
        }else{
            $_SESSION["numeros"][] = $datos->getValores()['numero'];
            $numeros=join(",",$_SESSION["numeros"]);
            if (count($_SESSION["numeros"]) == 10) {
                $objeto = new \clases\E3($_SESSION["numeros"]);
                $vista = "resultadoEjercicio3";
                $pie = $this->miPie;
                $salida=$objeto->getResultados();
            }
        }
        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 3"))->html(),
            "resultado" => $salida,
            "numeros"=>$numeros,
        ]);
    }

    
    public function ejercicio4Accion($datos) {
        $vista = "ejercicio4";
        $pie = "Ejercicio4";
        $salida = "";
        $numeros="";

        if(empty($datos->getValores())){
            $_SESSION["numeros"] = [];
        }else{
            $_SESSION["numeros"][] = $datos->getValores()['numero'];
            $numeros=join(",",$_SESSION["numeros"]);
            if (count($_SESSION["numeros"]) == 3) {
                $objeto = new \clases\E4($_SESSION["numeros"]);
                $vista = "resultadoEjercicio4";
                $pie = $this->miPie;
                $salida=$objeto->getResultados();
            }
        }
        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 4"))->html(),
            "resultado" => $salida,
            "numeros"=>$numeros,
        ]);
    }
    
      public function ejercicio5Accion($datos) {
        $vista = "ejercicio5";
        $pie = "Ejercicio5";
        $salida = "";
        $dia="01/01/1900";
                        
        if(!empty($datos->getValores())){
           $dia=$datos->getValores()['fecha'];
           $objeto= new \clases\E5($dia);
           $vista = "resultadoEjercicio5";
           $pie = $this->miPie;
           $salida=$objeto->getResultado();
        }
        
        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 5"))->html(),
            "resultado" => $salida,
            "fecha" => $dia,
        ]);
    }
    
      public function ejercicio6Accion($datos) {
        $vista = "ejercicio6";
        $pie = "Ejercicio6";
        $salida = "";
                                
       if(!empty($datos->getValores())){
                $numero=$_GET['numero'];
                if (!$numero){
                    $numero = mt_rand(1,10);
                }
                $objeto=new \clases\E6($numero);
                
        }
        
        $this->render([
            "vista" => $vista,
            "pie" => $pie,
            "menu" => (new \clases\Menu($this->miMenu, "Ejercicio 6"))->html(),
            "resultado" => $salida,
        ]);
    }
    
}
