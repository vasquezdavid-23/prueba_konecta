<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Consultar Materia Prima</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Consultar Datos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Categoria</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Color</th>
                                                <th class="text-center">Densidad</th>
                                                <th class="text-center">Peso</th>
                                                <th class="text-center">Ancho</th>
                                                <th class="text-center">Valor</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Estado</th>
                                                <th class="text-center">Modificar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($materia->result() as $key): ?>
                                                <tr>
                                                    <td class="text-center"><?= $key->nombrecategoria ?></td>
                                                    <td class="text-center"><?= $key->nombremateriaprima ?></td>
                                                    <td class="text-center"><?= $key->color ?></td>
                                                    <td class="text-center"><?= $key->densidad ?></td>
                                                    <td class="text-center"><?= $key->peso ?></td>
                                                    <td class="text-center"><?= $key->ancho ?></td>
                                                    <td class="text-center"><?= $key->valormetrosalida ?></td>
                                                    <td class="text-center"><?= $key->cantidad ?></td>
                                                    <td class="text-center"><?= $key->descripcion ?></td>
                                                    <td class="text-center"><?= $key->estadomateriaprima==true?"Activo":"Inactivo" ?></td>
                                                    <td class="text-center"><button class="btn btn-outline btn-primary" onclick="editarM('<?= $key->idmateriaprima ?>')"><i class="fa fa-edit fa-fw"></i> Modificar</button></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Categoria</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Color</th>
                                                <th class="text-center">Densidad</th>
                                                <th class="text-center">Peso</th>
                                                <th class="text-center">Ancho</th>
                                                <th class="text-center">Valor</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Descripción</th>
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
