<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar Salida</h1>
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
                                    <form id="modificarSalida">
                                        <input type="hidden" name="idS" id="id" value="<?= $salida->idsalida ?>">
                                        <input type="hidden" name="materiaM" value="<?= $salida->materiaprima_idmateriaprima ?>">
                                        <input type="hidden" name="cantidadM" value="<?= $salida->cantidadsalida ?>">
                                        <div class="form-group col-xs-6">
                                            <label for="">Materia Prima <span class="req">*</span></label>
                                            <select name="materiaS" id="" class="form-control">
                                                <option value="0">Seleccione...</option>
                                                <?php foreach($materia->result() as $value): ?>
                                                    <option value="<?= $value->idmateriaprima ?>" <?= $value->idmateriaprima==$salida->materiaprima_idmateriaprima?"selected":""?>><?= $value->nombremateriaprima.", ".$value->color.", ".$value->ancho."mm, ".$value->peso."grs, ".$value->descripcion ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Tipo Salida <span class="req">*</span></label>
                                            <select name="salidaS" id="" class="form-control">
                                                <option value="0">Seleccione...</option>
                                                <?php foreach($tiposalida as $value): ?>
                                                    <option value="<?= $value->idtiposalida ?>" <?= $value->idtiposalida==$salida->tiposalida_idtiposalida?"selected":"" ?>><?= $value->nombretiposalida ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="">Cantidad Salida <span class="req">*</span></label>
                                            <input type="number" name="cantidadS" id="" class="form-control" value="<?= $salida->cantidadsalida ?>">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="">Descripción <span class="req">*</span></label>
                                            <textarea name="descripcionS" class="form-control" id="" cols="20" rows="3"><?= $salida->descripcion ?></textarea>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <button class="btn btn-warning" type="button" onclick="modificarS()">Modificar</button>
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
