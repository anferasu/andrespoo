<?php
            foreach ($array as $value) {
                foreach ($a->getImprimir() as $v) {
                     
                    if ($v==$value){
                        echo "Array se ingreso en el mismo orden <br />";
                    }else{        
                        echo "Array no ingreso en el mismo orden <br />";
                    }
                    break;                     
                }          
                break; 
            }
            echo '<br /> Array inicial <br />';
            var_dump($array);
            echo 'Array ordenado <br />';
            var_dump($a); 
            
            include 'Vista/formulario.php';


