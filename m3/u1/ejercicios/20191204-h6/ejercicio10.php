<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
<!--    1 paso se carga el meta-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--    2 paso se carga el css-->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <style>
               	.col  {
			text-align: center;
		        
                }
        </style>
        <?php
           include 'lib/ejercicio10.php';
           $bandera=1;
          if (isset($_POST['enviar'])){
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $correo =  $_POST['email'];
            $contraseña =  $_POST['contrasena'];
            $fechaNacimiento =  $_POST['fnacimiento'];
            echo '<h1> Datos Registrados </h1>';
            echo 'Nombre Completo: ';
            echo $nombre . '<br />';
            echo 'Dirección: ';
            echo $direccion . '<br />';
            echo 'Correo Electronico: ' ;
            echo $correo . '<br />';
            echo 'Contraseña: ' ;
            echo $contraseña . '<br />';
            echo 'Fecha de Nacimiento: ' ;
            echo $fechaNacimiento . '<br />';
            echo 'Sexo: ' ;
            foreach ($_POST ["sexo"] as $value) {
                    echo "$sexo[$value] <br />";
            }
             echo "Genero: <br />";                                                        
             foreach ($_POST ["genero"] as $value) {
                   echo "$genero[$value] <br />";
             }
             echo "Afición: <br />";                                                        
             foreach ($_POST ["aficion"] as  $value) {
                     echo "$aficion[$value] <br />";
             }
            
            $bandera=0;
        }
        ?>
        <title></title>
    </head>
    <body>
        <!--    4 paso se carga el clase container de bootstrap-->
        
        <?php if ($bandera==1){
        ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col"><h1>Formulario de inscripción de usuario</h1></div>
            </div>
            
            <div class="row">
                 <div class="col-md-12 my-6">
                            <div class="card card-outline-secondary">
                                <div class="card-body">
                                    <form class="form"  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                       <div class="form-group row">
                                            <label for="a" class="col-md-3 col-form-label form-control-label">Nombre Completo</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" id="a" name="nombre" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="b" class="col-lg-3 col-form-label form-control-label">Dirección</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" type="text" value="" id="b" name="direccion"></textarea> 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="c" class="col-lg-3 col-form-label form-control-label">Correo Electronico</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" value="" id="c" name="email"  />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="d" class="col-lg-3 col-form-label form-control-label">Contraseña</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" value="" id="d" name="contrasena"  />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="e" class="col-lg-3 col-form-label form-control-label">Confirmar Contraseña</label>
                                            <div class="col-lg-9">
                                                <input id="e"  class="form-control" type="password" value=""  />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="f" class="col-lg-3 col-form-label form-control-label">Fecha de Nacimiento</label>
                                            <div class="col-lg-9">
                                                <input id="f" class="form-control" type="date" name="fnacimiento" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="g" class="col-lg-3 col-form-label form-control-label">Sexo</label>
                                            <div class="col-lg-9">
                                             <?php
                                                    foreach ($sexo as $indice => $valor) {
                                             ?>
                                                <input id="g" type="radio" value="<?= $indice ?>" name="sexo[]" /><label class="ml-2"><?= $valor ?></label><br/>        
                                            <?php
                                                    }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="h" class="col-lg-3 col-form-label form-control-label">Por favor elige los temas de tus intereses</label>
                                            <div class="col-lg-9">
                                            <?php
                                                    foreach ($genero as $indice => $valor) {
                                            ?>
                                                <input id="h" type="checkbox" value="<?= $indice ?>" name="genero[]" /><label><?= $valor ?></label><br/>        
                                            <?php
                                                    }
                                            ?>
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                              <label  class="col-lg-3 col-form-label form-control-label">Selecciona tus aficiones. (Selecciona multiples elementos pulsando la tecla control y haciendo clic en cada uno, uno a uno).</label>
                                            <div class="col-lg-9">
                                                <select name="aficion[]" multiple>
                                                    <?php
                                                        foreach ($aficion as $indice => $valor) {
                                                    ?>
                                                        <option value="<?= $indice ?>"><?= $valor ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                                                     
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <input  type="submit" class="btn btn-primary" value="Enviar" name="enviar">
                                                <input type="reset" class="btn btn-secondary" value="Cancelar" name="reset">
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- card body -->
                            </div> <!-- card-outline -->
                        </div>
        </div>
        <!--    3 paso se carga el jquery-->
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php
        }
        
        ?>
    </body>
</html>
