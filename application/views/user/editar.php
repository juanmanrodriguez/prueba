        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
                            <h2> Gesti&oacute;n de usuarios </h2>
			</div>
                </form>
                <ul class="nav menu">
                    <li class="active">
                        <a href="<?php echo site_url("User_Controller") ?>">
                            <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user">
                            </use>
                            </svg> Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("Project_Controller") ?>">
                            <svg class="glyph stroked pencil">
                            <use xlink:href="#stroked-pencil">

                            </use>
                            </svg> Proyectos
                        </a>
                    </li>
                    <li role="presentation" class="divider"></li>
                </ul>
        </div><!--/.sidebar-->
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuario</h1>
                </div>
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Editar usuario</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form role="form" method="post" action="<?php echo base_url() ?>User_Controller/edit_user/<?php echo $id_usuario ?>">    
                                    <div class="form-group">
                                        <label>Documento</label>
                                        <input type="text" class="form-control" name="documento" value="<?php echo $id_usuario ?>" readonly="true" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $nombre_usuario; ?>" />
                                    </div>								
                                    <div class="form-group">
                                        <label>Contrase&ntilde;a</label>
                                        <input type="text" class="form-control" min="1" max="5" name="pass" value="<?php echo $password_usuario; ?>" />
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Guardar" />
                                    <a class="btn btn-danger" href="<?php echo site_url("User_Controller"); ?>"> Cancelar </a>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.col-->
                </div><!-- /.row -->
            </div>
        </div><!--/.main-->