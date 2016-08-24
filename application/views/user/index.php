        <h1> Lista de usuarios </h1>
        <p> <a class="btn btn-success" href="<?php echo site_url("User_Controller/guardar") ?>"> Crear nuevo usuario </a> </p>
        <?php if (count($users)): ?>
            <table class="table tableborder">
                <thead>
                    <tr>
                        <th> Documento </th>
                        <th> Nombre </th>
                        <th> Contrase&ntilde;a </th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $item): ?>
                        <tr>
                            <td> <?php echo $item->id_usuario ?> </td>
                            <td> <?php echo $item->nombre_usuario ?> </td>
                            <td> <?php echo $item->password_usuario ?> </td>
                            <td> 
                                <a href="<?php echo site_url("User_Controller/ver/") ?><?php echo $item->id_usuario ?>"> Ver </a>
                                -
                                <a href="<?php echo site_url("User_Controller/edit/") ?><?php echo $item->id_usuario ?>"> Editar </a>
                                -
                                <a href="<?php echo site_url("User_Controller/delete/") ?><?php echo $item->id_usuario ?>"> Eliminar </a> 
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p> No hay informes </p>
        <?php endif; 