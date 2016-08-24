        <h1> Editar usuario </h1>
        <form method="post" action="<?php echo base_url() ?>User_Controller/edit_user/<?php echo $id_usuario ?>">
            <div class="row">
               <label> Documento </label>
               <input type="text" name="documento" value="<?php echo $id_usuario ?>" readonly="true" />
            </div>
            <div class="row">
               <label> Nombre </label>
               <input type="text" name="nombre" value="<?php echo $nombre_usuario; ?>" />
            </div>
            <div class="row">
               <label> Contrase&ntilde;a</label>
               <input type="text" min="1" max="5" name="pass" value="<?php echo $password_usuario; ?>" />
            </div>
            <div class="row">
               <input type="submit" class="btn btn-success" value="Guardar" />
               <a class="btn btn-danger" href="<?php echo base_url() ?>"> Cancelar </a>
            </div>
        </form>