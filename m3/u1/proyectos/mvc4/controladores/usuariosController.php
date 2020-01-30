<?php

namespace controladores;

use modelos\Usuarios;
use clases\Thumbnails;
use clases\ElementoThumbnails;
use clases\Fotos;
use clases\Panels;
use clases\ElementoPanels;

class UsuariosController extends Controller {

    private function menu($activo) {

        $pie = (new \clases\MenuBootstrap([
            "Crear Usuario" => $this->crearRuta(["controlador" => "usuarios", "accion" => "crear"]),
            "Modificar Usuarios" => $this->crearRuta(["controlador" => "usuarios", "accion" => "modificar"]),
            "Eliminar Usuarios" => $this->crearRuta(["controlador" => "usuarios", "accion" => "eliminar"]),
            "Eliminar Varios Usuarios" => $this->crearRuta(["controlador" => "usuarios", "accion" => "eliminar1"]),
        ]));
        $pie->setClases("navbar-inverse");
        $pie->setClases("navbar-fixed-bottom");
        $pie->setEnlaceHome($this->crearRuta(["controlador" => "usuarios", "accion" => "index"]));
        $pie->setHome('Listado');
        $pie->setNombre("miPie");
        return $pie->setActivo($activo)->render();
    }
    
    private function subirFichero($archivo){
        $ruta_destino_archivo = "./imgs/" . $archivo['name'];
        move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
        return $archivo["name"];
    }
    
    public function indexAccion($datos) {

        $modelo = new Usuarios();
        $datos = $modelo->todos();
        $widget = new Thumbnails();

        foreach ($datos as $indice => $registro) {
            $foto = new Fotos(["nombre" => $registro["foto"]]);
            $foto->setClases("usuarios");
            $contenido = '<ul class="list-group"><li class="list-group-item list-group-item-info">Nombre:' . $registro["Nombre"] . '</li>';
            $contenido .= '<li class="list-group-item">Login:' . $registro["Login"] . '</li>';
            $contenido .= '<li class="list-group-item list-group-item-info">Direccion:' . $registro["direccion"] . '</li>';
            $contenido .= '<li class="list-group-item">Password:' . $registro["Password"] . '</li>';
            $contenido .= "</ul>";
            $elemento = new ElementoThumbnails([
                "Titulo" => $registro["id"],
                "Contenido" => $contenido,
                "Imagen" => $foto->render()
            ]);
            $widget->añadirElemento($elemento);
        }
        $widget->setColumnas(4);


        $this->render([
            "vista" => "usuarios/index",
            "datos" => $widget->render(),
            "activo" => "Usuarios",
            "pie" => $this->menu("")
        ]);
    }
    
    public function crearAccion($datos){
      $this->render([
          "vista"=>"usuarios/formulario",
          "pie"=>$this->menu("Crear Usuario"),
          "activo"=>"Usuarios"
    ]);
}
    
    
    public function insertarAccion($datos){
        $modelo=new Usuarios();
        $modelo->nombre=$datos["Nombre"];
        $modelo->login=$datos["Login"];
        $modelo->password=$datos["Password"];
        $modelo->direccion=$datos["Direccion"];
        $modelo->foto=$this->subirFichero($_FILES["Foto"]);
        $modelo->insert();
        $this->indexAccion($datos);
    }
    
    public function modificarAccion($datos){
        $modelo = new Usuarios();
        $datos = $modelo->todos();
        $widget=new Panels();

        foreach ($datos as $indice => $registro) {
            $foto = new Fotos(["nombre" => $registro["foto"]]);
            $foto->setClases("usuarios");
            $contenido = '<ul class="list-group"><li class="list-group-item list-group-item-info">Nombre:' . $registro["Nombre"] . '</li>';
            $contenido .= '<li class="list-group-item">Login:' . $registro["Login"] . '</li>';
            $contenido .= '<li class="list-group-item list-group-item-info">Direccion:' . $registro["direccion"] . '</li>';
            $contenido .= '<li class="list-group-item">Password:' . $registro["Password"] . '</li>';
            $contenido .= "</ul>";
            $elemento = new ElementoPanels([
                "Titulo" => $registro["id"],
                "Contenido" => $contenido,
                "Pie"=>$foto->render() . '<a href="' . $this->crearRuta(["controlador"=>"usuarios","accion" => "formularioModificar", "parametros" => "id=" . $registro['id']]) .
                '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar Usuario</a>'
            ]);
            $widget->añadirElemento($elemento);
        }
        $widget->setColumnas(4);


        $this->render([
            "vista" => "usuarios/modificar",
            "datos" => $widget->render(),
            "activo" => "Usuarios",
            "pie" => $this->menu("Modificar Usuarios")
        ]);
      
}


public function formularioModificarAccion($datos){
      $modelo=new Usuarios();
      $datos=$modelo->listado1(["condicion"=>"id=" . $datos["id"]]);
      $this->render([
          "vista"=>"usuarios/formularioModificar",
          "datos"=>$datos,
          "pie" => $this->menu("Modificar Usuarios"),
          "activo"=>"Usuarios",
    ]);
}

    public function saveAccion($datos){
        $modelo=new Usuarios();
        $modelo->id=$datos["Id"];
        $modelo->nombre=$datos["Nombre"];
        $modelo->login=$datos["Login"];
        $modelo->password=$datos["Password"];
        $modelo->direccion=$datos["Direccion"];
        /* compruebo si la foto me llega */
        var_dump($_FILES);
        if(empty($_FILES["Foto"]['name'])){
            /* recupero la foto */
            $modeloViejo=Usuarios::findOne("id=".$datos["Id"]);
            $modelo->foto=$modeloViejo->foto;
        }else{
            $modelo->foto=$this->subirFichero($_FILES["Foto"]);
        }
        
        $modelo->save();
        $this->indexAccion($datos);

    }



public function eliminarAccion($datos){
        $modelo = new Usuarios();
        $datos = $modelo->todos();
        $widget=new Panels();

        foreach ($datos as $indice => $registro) {
            $foto = new Fotos(["nombre" => $registro["foto"]]);
            $foto->setClases("usuarios");
            $contenido = '<ul class="list-group"><li class="list-group-item list-group-item-info">Nombre:' . $registro["Nombre"] . '</li>';
            $contenido .= '<li class="list-group-item">Login:' . $registro["Login"] . '</li>';
            $contenido .= '<li class="list-group-item list-group-item-info">Direccion:' . $registro["direccion"] . '</li>';
            $contenido .= '<li class="list-group-item">Password:' . $registro["Password"] . '</li>';
            $contenido .= "</ul>";
            $elemento = new ElementoPanels([
                "Titulo" => $registro["id"],
                "Contenido" => $contenido,
                "Pie"=>$foto->render() . '<a href="' . $this->crearRuta(["controlador"=>"usuarios","accion" => "eliminarUno", "parametros" => "id=" . $registro['id']]) .
                '"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar Usuario</a>'
            ]);
            $widget->añadirElemento($elemento);
        }
        $widget->setColumnas(4);


        $this->render([
            "vista" => "usuarios/eliminar",
            "datos" => $widget->render(),
            "activo" => "Usuarios",
            "pie" => $this->menu("Eliminar Usuarios")
        ]);
      
}


     public function eliminarUnoAccion($datos){
        $modelo=new Usuarios();
        $modelo->id=$datos["id"];
        $modelo->eliminar();
        $this->eliminarAccion($datos);
    }
    
    public function eliminar1Accion($datos){
        $modelo = new Usuarios();
        $datos = $modelo->todos();
        $widget=new Panels();

        foreach ($datos as $indice => $registro) {
            $foto = new Fotos(["nombre" => $registro["foto"]]);
            $foto->setClases("usuarios");
            $contenido = '<ul class="list-group"><li class="list-group-item list-group-item-info">Nombre:' . $registro["Nombre"] . '</li>';
            $contenido .= '<li class="list-group-item">Login:' . $registro["Login"] . '</li>';
            $contenido .= '<li class="list-group-item list-group-item-info">Direccion:' . $registro["direccion"] . '</li>';
            $contenido .= '<li class="list-group-item">Password:' . $registro["Password"] . '</li>';
            $contenido .= "</ul>";
            $elemento = new ElementoPanels([
                "Titulo" => $registro["id"],
                "Contenido" => $contenido,
                "Pie"=>$foto->render() . '<input type="checkbox" name="eliminar[]" value="'. $registro["id"] .'"> Seleccionar para eliminar'
            ]);
            $widget->añadirElemento($elemento);
        }
        $widget->setColumnas(4);


        $this->render([
            "vista" => "usuarios/eliminar1",
            "datos" => $widget->render(),
            "activo" => "Usuarios",
            "pie" => $this->menu("Eliminar Varios Usuarios"),
        ]);
      
}

 public function eliminarTodosAccion($datos){
     
     foreach($datos["eliminar"] as $registros){
        $modelo=new Usuarios();
        $modelo->id=$registros;
        $modelo->eliminar();
        
     }
     $this->eliminarAccion($datos);
    }
}