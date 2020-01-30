<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1>Ejercicio 12 Hoja 4</h1>

        <div>
            <form name="frm" method="post">
                <table border="0">
                    <div><tr><td><label>Ingrese Horas</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><label>Ingrese Tarifa</label></td><td> <input name="num2" type="number"></td></tr></div>
                    <div><tr><td><label>Ingrese Tasa</label></td><td> <input name="num3" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>

        <?php
        $horas = 0;
        $tarifa = 0;
        $tasa = 0;
        $pagaBruta = 0;
        $impuestos = 0;
        $pagaNeta = 0;

        if (isset($_POST['send'])) {

            $horas = $_REQUEST['num1'];
            $tarifa = $_REQUEST['num2'];
            $tasa = $_REQUEST['num3'];

            $pagaBruta = $horas * $tarifa;
            $impuestos = $pagaBruta * $tasa;
            $pagaNeta = $pagaBruta - $impuestos;
            
            echo '<br>' . "La paga bruta es:" . $pagaBruta;
            echo '<br>' . "El impuesto es: " . $impuestos;
            echo '<br>' . "La paga neta es: " . abs($pagaNeta);
            
        }
        ?>
    </body>
</html>
