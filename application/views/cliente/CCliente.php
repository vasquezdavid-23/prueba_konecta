            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Consultar Cliente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulario
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
                                                <th class="text-center">Correo</th>
                                                <th class="text-center">Teléfono</th>
                                                <th class="text-center">Ciudad</th>
                                                <th class="text-center">Descuento</th>
                                                <th class="text-center">Razon Social</th>
                                                <th class="text-center">Nit</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Modificar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($cliente->result() as $key): ?>
                                                <tr>
                                                    <td class="text-center"><?= $key->nombreempresa==null?"--":$key->nombreempresa ?></td>
                                                    <td class="text-center"><?= $key->nombrecliente==null?"--":$key->nombrecliente ?></td>
                                                    <td class="text-center"><?= $key->apellidocliente==null?"--":$key->apellidocliente ?></td>
                                                    <td class="text-center"><?= $key->correocliente==null?"--":$key->correocliente ?></td>
                                                    <td class="text-center"><?= $key->telefono==null?"--":$key->telefono ?></td>
                                                    <td class="text-center"><?= $key->ciudad ?></td>
                                                    <td class="text-center"><?= $key->descuento."%" ?></td>
                                                    <td class="text-center"><?= $key->razonsocial==null?"--":$key->razonsocial ?></td>
                                                    <td class="text-center"><?= $key->nit ?></td>
                                                    <td class="text-center"><?= $key->estadocliente==true?"Activo":"Inactivo" ?></td>
                                                    <td class="text-center"><button class="btn btn-outline btn-primary" onclick="editarC('<?= $key->idcliente ?>')"><i class="fa fa-edit fa-fw"></i> Modificar</button></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Empresa</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Apellido</th>
                                                <th class="text-center">Correo</th>
                                                <th class="text-center">Teléfono</th>
                                                <th class="text-center">Ciudad</th>
                                                <th class="text-center">Descuento</th>
                                                <th class="text-center">Razon Social</th>
                                                <th class="text-center">Nit</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Modificar</th>
                                            </tr>
                                        </tfoot>
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
