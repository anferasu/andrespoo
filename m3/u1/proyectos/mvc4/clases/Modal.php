<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of Modal
 *
 * @author ramon
 */
class Modal {

    private $idVentana;
    private $salida;
    private $clases;

    public function setClases($clases) {
        $this->clases[] = $clases;
        return $this;
    }
    
    public function getClases() {
        return implode(" ",$this->clases);
    }

    
    public function __construct($r = []) {
        $r = array_replace([
            "id" => "miModal",
            "titulo" => "ejemplo",
            "clases" => "btn-info btn-lg",
            "datos" => [
                "ejemplo de ventana modal"
            ]
                ], $r);
        $this->clases=explode(" ",$r["clases"]);
        $this->idVentana = $r["id"];
        $this->salida = '<div id="' . $this->idVentana . '" class="modal fade" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        $this->salida .= '<h4 class="modal-title">' . $r["titulo"] . '</h4>';
        $this->salida .= '</div><div class="modal-body"><ul>';
        foreach ($r["datos"] as $v) {
            $this->salida .= "<li>$v</li>";
        }
        $this->salida .= '</ul></div></div></div></div>';
    }

    public function setIdVentana($idVentana) {
        $this->idVentana = $idVentana;
        return $this;
    }
    
    private function escribirJs($dato){
        $ruta= \clases\Aplicacion::$urlRaiz . "/js/php.js";
        $file = fopen($ruta, "wb");
        fwrite($file, $dato . PHP_EOL);
        fclose($file);
    }

    public function render($boton=TRUE) {
        if($boton){
            $this->salida .= '<button type="button" class="btn '. $this->getClases() .'" data-toggle="modal" data-target="#' . $this->idVentana . '">Open Modal</button>';
        }else{
            $this->escribirJs('$("#'.$this->idVentana.'").modal("show");');
        }
        return $this->salida;
    }

}
