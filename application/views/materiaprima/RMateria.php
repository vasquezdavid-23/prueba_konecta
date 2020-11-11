            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Materia Prima</h1>
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
                                    <form id="registrarMateria">
                                        <div class="form-group col-xs-12">
                                            <label for="">Categoria Materia Prima <span class="req">*</span></label>
                                            <select name="idC" id="" class="form-control">
                                                <option value="0">Seleccione...</option>
                                                <?php foreach($categoria->result() as $key): ?>
                                                    <option value="<?= $key->idcategoriasmateriaprima ?>"><?= $key->nombrecategoria ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Nombre Materiar <span class="req">*</span></label>
                                            <input type="text" name="nombreM" id="" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Color Materia</label>
                                            <input type="text" name="colorM" id="" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Densidad Materia</label>
                                            <input type="number" min="1" name="densidadM" id="" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Valor Metro <span class="req">*</span></label>
                                            <input type="number" min="1" name="valorM" id="" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Ancho Materia</label>
                                            <input type="number" min="1" name="anchoM" id="" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Peso Materia</label>
                                            <input type="number" min="1" name="pesoM" id="" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="">Descripción Materia</label>
                                            <input type="text" name="descripcionM" id="" class="form-control">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <button class="btn btn-success" type="button" onclick="registrarM()">Registrar</button>
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
