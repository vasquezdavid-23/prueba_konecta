<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Consultar Proveedor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Consultar
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Empresa</th>
                                                    <th class="text-center">Nombre</th>
                                                    <th class="text-center">Apellido</th>
                                                    <th class="text-center">Teléfono</th>
                                                    <th class="text-center">Correo</th>
                                                    <th class="text-center">Dirección</th>
                                                    <th class="text-center">Estado</th>
                                                    <th class="text-center">Opreción</th>
                                                </tr>    
                                            </thead>
                                            <tbody>
                                                <?php foreach ($proveedor->result() as $key): ?>
                                                    <tr>
                                                        <td class="text-center"><?= $key->nombreempresa==null?"--":$key->nombreempresa ?></td>
                                                        <td class="text-center"><?= $key->nombreproveedor==null?"--":$key->nombreproveedor ?></td>
                                                        <td class="text-center"><?= $key->apellidoproveedor==null?"--":$key->apellidoproveedor ?></td>
                                                        <td class="text-center"><?= $key->telefonoproveedor==null?"--":$key->telefonoproveedor ?></td>
                                                        <td class="text-center"><?= $key->correoproveedor==null?"--":$key->correoproveedor ?></td>
                                                        <td class="text-center"><?= $key->direccionproveedor==null?"--":$key->direccionproveedor ?></td>
                                                        <td class="text-center"><?= $key->estadoproveedor==true?"Activo":"Inactivo" ?></td>
                                                        <td class="text-center"><button class="btn btn-outline btn-primary" onclick="editar('<?= $key->idproveedor ?>')"><i class="fa fa-edit fa-fw"></i> Modificar</button></td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


