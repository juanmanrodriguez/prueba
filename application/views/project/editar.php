        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
                            <h2> Gesti&oacute;n de usuarios </h2>
			</div>
                </form>
                <ul class="nav menu">
                    <li>
                        <a href="<?php echo site_url("User_Controller") ?>">
                            <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user">
                            </use>
                            </svg> Usuarios
                        </a>
                    </li>
                    <li class="active">
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
                                <form role="form" method="post" action="<?php echo base_url() ?>Project_Controller/edit_user/<?php echo $nombre_proyecto ?>">    
                                    <div class="form-group">
                                        <label> Nombre </label>
                                        <input type="text" name="nombre_proyecto" class="form-control" placeholder="Nombre" value="<?php echo $nombre_proyecto ?>" readonly="true" />
                                    </div>
                                    <div class="form-group">
                                        <label> Descripcion </label>
                                        <textarea class="form-control" name="descripcion_proyecto" rows="3" placeholder="Descripcion"  value="<?php echo $descripcion_proyecto; ?>" ></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Guardar" />
                                    <a class="btn btn-danger" href="<?php echo site_url("Project_Controller"); ?>"> Cancelar </a>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.col-->
                </div><!-- /.row -->
            </div>
        </div><!--/.main-->