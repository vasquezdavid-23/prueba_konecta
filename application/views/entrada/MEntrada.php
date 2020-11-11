<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar Entrada</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="modificarEntrada">
                                        <input type="hidden" name="idE" value="<?= $entrada->result()[0]->identrada ?>">
                                        <input type="hidden" name="idMM" value="<?= $entrada->result()[0]->idmateriaprima ?>">
                                        <input type="hidden" name="cantidadAc" value="<?= $entrada->result()[0]->cantidadmetros ?>">
                                        <div class="form-group col-xs-6">
                                            <label for="">Materia Prima <span class="req">*</span></label>
                                            <select name="idM" id="" class="form-control">
                                                <option value="0">Seleccione...</option>
                                                <?php foreach ($materiaprima->result() as $key): ?>
                                                    <option value="<?= $key->idmateriaprima ?>" <?= $key->idmateriaprima==$entrada->result()[0]->materiaprima_idmateriaprima?"selected":"" ?>><?= $key->nombremateriaprima." ".$key->ancho."mm, ".$key->peso."kg" ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Proveedor <span class="req">*</span></label>
                                            <select name="idP" id="" class="form-control">
                                                <option value="0">Seleccione...</option>
                                                <?php foreach($proveedor->result() as $key): ?>
                                                    <option value="<?= $key->idproveedor ?>" <?= $key->idproveedor==$entrada->result()[0]->proveedor_idproveedor?"selected":"" ?>><?= "Nombre: ".$key->nombreproveedor.", Apellido: ".$key->apellidoproveedor.", Empresa: ".$key->nombreempresa ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="">Fecha Entrada</label>
                                            <input type="date" name="fechaE" id="" class="form-control" value="<?= $entrada->result()[0]->fechaentrada ?>" readonly>
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="">Metro Entrada <span class="req">*</span></label>
                                            <input type="number" min="1" id="metro" name="metroM" class="form-control" value="<?= $entrada->result()[0]->cantidadmetros ?>">
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="">Valor Metro <span class="req">*</span></label>
                                            <input type="number" onchange="calcularEntrada()" min="1" name="valorE" id="valor" class="form-control" value="<?= $entrada->result()[0]->valormetro ?>">
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="">Total Entrada <span class="req">*</span></label>
                                            <input type="number" min="1" name="totalE" id="total" class="form-control" value="<?= $entrada->result()[0]->totalentrada ?>" readonly>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <button class="btn btn-warning" type="button" onclick="modificarE()">Modificar</button>
                                        </div>
                                    </form>
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
