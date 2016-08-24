        <h1> Usuario: </h1> 
        <table>
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Contrase&ntilde;a</th>
            </tr>
            <tr>
                <td><?php echo $user->id_usuario ?></td>
                <td><?php echo $user->nombre_usuario; ?></td>
                <td><?php echo ($user->password_usuario) ?></td>
            </tr>
        </table>
        <br />
        <div> <a class="btn btn-info" href="<?php echo base_url() ?>"> Volver atrás </a> </div>