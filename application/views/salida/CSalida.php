<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Salida</h1>
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
                                                <th class="text-center">Materia Prima</th>
                                                <th class="text-center">Tipo Salida</th>
                                                <th class="text-center">Fecha</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Opreción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($salida as $value): ?>
                                                <tr>
                                                    <td class="text-center"><?= $value->nombremateriaprima ?></td>
                                                    <td class="text-center"><?= $value->nombretiposalida ?></td>
                                                    <td class="text-center"><?= $value->fechasalida ?></td>
                                                    <td class="text-center"><?= $value->cantidadsalida ?></td>
                                                    <td class="text-center"><?= $value->totalsalida ?></td>
                                                    <td class="text-left"><?= $value->descripcion ?></td>
                                                    <td class="text-center"><?= $value->estadosalida==true?"Activo":"Inactivo" ?></td>
                                                    <td class="text-center">
                                                    <button type="button" class="btn btn-outline btn-primary" onclick="editarS('<?= $value->idsalida ?>')"><i class="fa fa-edit fa-fw"></i> Modificar</button>
                                                    <button type="button" class="btn btn-outline btn-danger" onclick="eliminarS('<?= $value->idsalida ?>')"><i class="fa fa-times fa-fw"></i> Eliminar</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Materia Prima</th>
                                                <th class="text-center">Tipo Salida</th>
                                                <th class="text-center">Fecha</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Opreción</th>
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
