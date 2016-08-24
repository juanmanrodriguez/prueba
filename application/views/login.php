        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Inicio de sesi&oacute;n</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo site_url("Login_Controller/login") ?>">     <!-- Arreglar la ruta para el inicio de sesion -->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" type="text" name="nombre_usuario" 
                                           value="<?php set_value("nombre_usuario") ?>" autofocus="" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contrase&ntilde;a" type="password" min="1" max="5" 
                                           name="password_usuario" value="<?php set_value("password_usuario") ?>" />
                                </div>
                                <?php echo $error ?>
                                <input type="submit" class="btn btn-primary" value="Ingresar" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->