<!DOCTYPE html>
<?php
include 'lib/libreria.php';
?>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--    2 paso se carga el css-->
 <link rel="stylesheet" href="css/bootstrap.min.css"/>
 <style>
      .col  {
	text-align: center;
	    }
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-6">
                    <div class="form-group row">
                    <form action="index.php" method="post" >
                        <?php
                            crearCajas();
                        ?>            
                    </div> 
                        <div>
                            <label>Sexo:</label>
                            <br />
                        </div>
                    <div class="form-group row">
                            <?php
                            crearRadio();
                        ?>            
                    </div>
                    <div class="form-group row">
                           <?php
                            crearMultiple();
                           ?>            
                    </div>
                    </form>
                    </div>   
                </div>
            </div>    
        </div>
        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
