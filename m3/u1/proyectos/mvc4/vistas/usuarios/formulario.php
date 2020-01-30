<div class="row alert alert-info">
    <form name="unico" enctype="multipart/form-data" method="post" action="<?= $this->crearRuta(["controlador" => "usuarios", "accion" => "insertar"]) ?>">
        <div class="form-group">
            <label for="inombre">Nombre del Usuario</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner fa-spin fa-fw" aria-hidden="true"></i></span>
                <input type="text" class="form-control" id="inombre" name="Nombre" placeholder="Introduce el nombre completo del usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="ilogin">Login del Usuario</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner fa-spin fa-fw"></i></span>
                <input type="text" class="form-control" id="ilogin" name="Login" placeholder="Introduce el Login del usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="ipassword">Contraseña</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner fa-spin fa-fw" aria-hidden="true"></i></span>
                <input type="password" class="form-control" id="ipassword" name="Password" placeholder="Introduce la contraseña del usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="idireccion">Dirección</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner fa-spin fa-fw" aria-hidden="true"></i></span>
                <input type="text" class="form-control" id="idireccion" name="Direccion" placeholder="Introduce la direccion del usuario">
            </div>
        </div>
        <div class="form-group">
            <label for="ifoto">Incluya una foto</label>
            <div class="drag-drop">
                <input type="file" name="Foto" id="ifoto" />
                <span class="fa-stack fa-2x">
                    <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                    <i class="fa fa-circle fa-stack-1x top medium"></i>
                    <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                </span>
                <span class="desc">Pulse aquí para añadir archivos</span>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary pull-right btn-md">Añadir el usuario</button>
        </div>
    </form>
</div>
<?= $this->pie ?>

