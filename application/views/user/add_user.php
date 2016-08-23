        <ul>
            <li><a href="<?php echo site_url(""); ?>">Inicio</a></li>
            <li><a href="<?php echo site_url("User_Controller"); ?>">A&ntilde;adir usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/update"); ?>">Modificar usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/delete"); ?>">Eliminar usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/list_users"); ?>">Ver usuarios</a></li>
        </ul>
        <h2>A&ntilde;adir un usuario</h2>
        <form method="POST" action="<?php echo site_url("User_Controller/add_user"); ?>" name="form" id="form">
            <?php echo validation_errors(); ?>
            <fieldset>
                <legend>A&ntilde;adir un usuario</legend>
                <p><label>Documento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label><input type="text" name="documento" id="documento" value="" /></p>
                <p><label>Nombre y apellido:&nbsp;&nbsp;</label><input type="text" name="nombre" id="nombre" value="" /></p>
                <p><label>Contrase&ntilde;a:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label><input type="pass" name="passw" id="passw" value="" /></p>
                <p></p>
                <p>
                    <input type="submit" name="send" value="A&ntilde;adir" />
                </p>
            </fieldset>
        </form>
