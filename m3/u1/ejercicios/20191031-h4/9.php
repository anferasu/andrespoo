<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $suma = 0;
        $sumaAnterior = "";

        if (isset($_POST['send'])) {
            $suma = $_REQUEST['num1'];
            $sumaAnterior = $_REQUEST['valor'];
            $sumaAnterior .= "$suma,";
        }
        ?>

        <h1>Ejercicio 9 Hoja 4</h1>
        <div>
            <form method="post" name="frm">
                <table border="0">
                    <div><tr><td><label>Ingrese numero</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
                <input type="hidden" name="valor" value="<?= $sumaAnterior ?>">

            </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        <?php
        $sumaAnterior = explode(",", $sumaAnterior);
        array_pop($sumaAnterior);
        print_r(array_values($sumaAnterior));
        if ($suma >= 0) {
            array_sum($sumaAnterior);
        } else {
            array_pop($sumaAnterior);
            array_sum($sumaAnterior);
            echo 'La suma es:' . array_sum($sumaAnterior);
            ?>
            <script type="text/javascript">
                function disableSending() {
                    document.frm.send.disabled = !document.frm.send.checked;
                }
                ;
            </script>

            <?php
            echo "<script>";
            echo "disableSending();";
            echo "</script>";
        }
        ?>
    </body>
</html>
