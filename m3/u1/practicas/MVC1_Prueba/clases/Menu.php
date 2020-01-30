<?php
namespace clases;
class Menu
{

    private $vector; //Asociativo ['indices'=>'enlaces']
    private $class_li;
    private $class_ul;
    private $class_a;
    private $clase_nav;
    private $claves;
    private $valores;
    private $num;
    private $tipo;
    private $ul;
    private $activo;

    function __construct() {
        $this->num= func_num_args();
        //controlar lo que se hace según se pase uno ó 2 argumentos
        switch ($this->num){
            case 2:
                $this->vector= func_get_arg(0);
                $this->activo= func_get_arg(1);
                break;
            case 3:
                //si recibimos 2 argumentos el primero será el array de las claves
                //el segundo el array de los valores
                $this->claves= func_get_arg(0);
                $this->valores= func_get_arg(1);
                //creamos el array asociativo
                $this->vector= array_combine($this->claves, $this->valores);
                $this->activo= func_get_arg(2);
        }
        
        $this->setClass_a();
        $this->setClass_li();
        $this->setClass_ul();
        $this->setClass_nav();
        $this->defaultStyle();
    
    }
    

    function setClass_li($clase_li = "headerLi") {
     
        $this->class_li = $clase_li;
    }

    function setClass_ul($clase_ul="headerUl") {
     
            $this->class_ul = $clase_ul;
    }
    function setClass_a($clase_a= "headerA") {
 
        $this->class_a = $clase_a;
    }
    
    function setClass_nav($clase_nav="headerNav") {
        $this->class_nav = $clase_nav;
    }

        
    function getClass_li() {
        return $this->class_li;
    }

    function getClass_ul() {
        return $this->class_ul;
    }
    
    function getClass_a() {
        return $this->class_a;
    }

    function getClass_nav() {
        return $this->class_nav;
    }

                
    function html()
    {
         
        $this->ul = "<nav class=".$this->getClass_nav()."><ul class=".$this->getClass_ul().">";
      
        foreach($this->vector as $i=>$v)
            {
                if($i==$this->activo){
                    $this->ul.="<li class=\"".$this->getClass_li()." activo\"><a class=".$this->getClass_a()." href=".$v.">".$i."</a></li>";
                }else{
                    $this->ul.="<li class=".$this->getClass_li()."><a class=".$this->getClass_a()." href=".$v.">".$i."</a></li>";
                }
            }
            
           $this->ul.="</ul></nav>";
          return $this->ul;
    }
    
    function defaultStyle() {
       ?>

     <style type='text/css'>
         
         .headerNav{
         
             display:table;
             margin:0px auto;
             width:100%;
             height: 43px;
             background-color: rgba(0,0,0,0.8);
    
         }
             .headerUl{
              display: table-row;
              text-align: center;
            }
            .headerLi{
                display: table-cell;
               vertical-align: middle;
            }
            .headerA{
                 display: block;
                 text-decoration:none;
                 font-family: sans-serif;
                 color: rgba(255,255,255,1);
                 cursor:pointer;
                 font-size: 16px;
                
            }
            .headerA:hover{
             color: rgba(255,255,255,0.8);
             
            }
            .activo{
                background: blue;  
            }
        </style>
        
   <?php
    }



}
