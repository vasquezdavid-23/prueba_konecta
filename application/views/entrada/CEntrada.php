            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Entrada</h1>
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
                                                <th class="text-center">MateriaPrima</th>
                                                <th class="text-center">Proveedor</th>
                                                <th class="text-center">Fecha</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Valor</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Esatdo</th>
                                                <th class="text-center">Modificar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($entrada->result() as $key): ?>
                                                <tr>
                                                    <td class="text-center"><?= $key->nombremateriaprima ?></td>
                                                    <td class="text-center"><?= $key->nombreproveedor ?></td>
                                                    <td class="text-center"><?= $key->fechaentrada ?></td>
                                                    <td class="text-center"><?= $key->cantidadmetros ?></td>
                                                    <td class="text-center"><?= $key->valormetro ?></td>
                                                    <td class="text-center"><?= $key->totalentrada ?></td>
                                                    <td class="text-center"><?= $key->estadoentrada==true?"Activo":"Inactivo" ?></td>
                                                    <td class="text-center"><button class="btn btn-primary btn-outline" onclick="editarE('<?= $key->identrada ?>')"><i class="fa fa-edit fa-fw"></i> Modificar</button></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">MateriaPrima</th>
                                                <th class="text-center">Proveedor</th>
                                                <th class="text-center">Fecha</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Valor</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Esatdo</th>
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
