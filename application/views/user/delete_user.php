        <ul>
            <li><a href="<?php echo site_url(""); ?>">Inicio</a></li>
            <li><a href="<?php echo site_url("User_Controller"); ?>">A&ntilde;adir usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/update"); ?>">Modificar usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/delete"); ?>">Eliminar usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/list_users"); ?>">Ver usuarios</a></li>
        </ul>
        <h2>Eliminar usuario</h2>
        
            <fieldset>
                <legend>Eliminar un usuario</legend>
                <table>

                    <thead>
                        <tr>
                            <td>Documento</td>
                            <td>Nombre</td>
                            <td>Contrase&ntilde;a</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><input type="text" name="documento" id="documento" value="<?php echo $user->id_usuario ?>" readonly="true"/></td>
                                <td><input type="text" name="nombre" id="nombre" value="<?php echo $user->nombre_usuario ?>" readonly="true" /></td>
                                <td><input type="pass" name="passw" id="passw" value="<?php echo $user->password_usuario ?>" readonly="true" /></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <form method="POST" action="<?php echo site_url("User_Controller/delete_user"); ?>" name="form" id="form">
                    <p>
                        <label>Documento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select>
                                <?php foreach ($users as $user): ?>
                                    <option value="<?php echo $user->id_usuario ?>"><?php echo $user->nombre_usuario ?></option>
                                <?php endforeach; ?>
                                    <input type="text" name="documento" id="documento" value="<?php echo $user->password_usuario ?>" readonly="true" />
                            </select> 
                    </p>
                    <p></p>
                    <p>
                        <input type="submit" name="send" value="Eliminar" />
                    </p>
                </form>
            </fieldset>
        