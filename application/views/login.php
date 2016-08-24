        <h1> Inicio de sesi&oacute;n </h1>
        <form method="post" action="<?php echo site_url("Login_Controller/login") ?>">     <!-- Arreglar la ruta para el inicio de sesion -->
            <div class="row">
               <label> Usuario </label>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="text" name="nombre_usuario" value="<?php set_value("nombre_usuario") ?>" />
            </div>
            <div class="row">
               <label> Contrase&ntilde;a </label>
               &nbsp;&nbsp;
               <input type="password" min="1" max="5" name="password_usuario" value="<?php set_value("password_usuario") ?>" />
            </div>
            <div class="row">
               <?php echo $error ?>
            </div>
            <div class="row">
               <input type="submit" class="btn btn-success" value="Ingresar" />
            </div>
        </form>