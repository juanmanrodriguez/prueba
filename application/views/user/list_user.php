        <ul>
            <li><a href="<?php echo site_url(""); ?>">Inicio</a></li>
            <li><a href="<?php echo site_url("User_Controller"); ?>">A&ntilde;adir usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/update"); ?>">Modificar usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/delete"); ?>">Eliminar usuario</a></li>
            <li><a href="<?php echo site_url("User_Controller/list_users"); ?>">Ver usuarios</a></li>
        </ul>
        <h2>Listado de usuarios</h2>
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
                        <td><?php echo $user->id_usuario; ?></td>
                        <td><?php echo $user->nombre_usuario; ?></td>
                        <td><?php echo $user->password_usuario; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </tfoot>
        </table>