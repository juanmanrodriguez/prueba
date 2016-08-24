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
            <h1> Listado de Usuarios </h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <p>
                                <a class="btn btn-info" href="<?php echo site_url("Project_Controller/guardar");  ?>"> Crear nuevo proyecto </a>
                            </p>
                        </div>
                        <div class="panel-body">
                            <?php if (count($projects)): ?>
                                <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" 
                                       data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc"
                                       class="table tableborder">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true" > Nombre </th>
                                            <th data-field="id" data-sortable="true"> Descripcion </th>
                                            <th data-field="price" data-sortable="true"> Opciones </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($projects as $item): ?>
                                            <tr>
                                                <td> <?php echo $item->nombre_proyecto ?> </td>
                                                <td> <?php echo $item->descripcion_proyecto ?> </td>
                                                <td> 
                                                    <a href="<?php echo site_url("Project_Controller/ver/") ?><?php echo $item->nombre_proyecto ?>"> Ver </a>
                                                    -
                                                    <a href="<?php echo site_url("Project_Controller/edit/") ?><?php echo $item->nombre_proyecto ?>"> Editar </a>
                                                    -
                                                    <a href="<?php echo site_url("Project_Controller/delete/") ?><?php echo $item->nombre_proyecto ?>"> Eliminar </a> 
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <p> No hay proyectos </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
