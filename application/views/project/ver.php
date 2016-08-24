        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
                            <h2> Gesti&oacute;n de usuarios </h2>
			</div>
                </form>
                <ul class="nav menu">
                    <li class="active">
                        <a href="index.html">
                            <svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user">
                            </use>
                            </svg> Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="forms.html">
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
                        <div class="panel-heading">Informaci&oacute;n del usuario</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Documento</label>
                                        <input type="text" class="form-control" placeholder="<?php echo $user->id_usuario ?>" readonly="true" >
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="<?php echo $user->nombre_usuario; ?>" readonly="true" >
                                    </div>								
                                    <div class="form-group">
                                        <label>Contrase&ntilde;a</label>
                                        <input type="text" class="form-control" placeholder="<?php echo $user->password_usuario; ?>" readonly="true" >
                                    </div>
                                    <a class="btn btn-info" href="<?php echo site_url("User_Controller"); ?>"> Volver atrás </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->

        </div><!--/.main-->