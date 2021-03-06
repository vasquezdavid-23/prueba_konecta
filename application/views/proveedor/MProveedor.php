<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar Proveedor</h1>
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
                                    <form id="modificarProveedor">
                                        <input type="hidden" name="idP" value="<?= $proveedor->result()[0]->idproveedor ?>">
                                        <div class="form-group col-xs-6">
                                            <label for="">Nombre Proveedor</label>
                                            <input type="text" name="nombreP" id="" class="form-control" value="<?= $proveedor->result()[0]->nombreproveedor ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Apellido Proveedor</label>
                                            <input type="text" name="apellidoP" id="" class="form-control" value="<?= $proveedor->result()[0]->apellidoproveedor ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Teléfono Proveedor</label>
                                            <input type="number" name="telefonoP" id="" class="form-control" value="<?= $proveedor->result()[0]->telefonoproveedor ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Correo Proveedor</label>
                                            <input type="email" name="correoP" id="" class="form-control" value="<?= $proveedor->result()[0]->correoproveedor ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Dirección Proveedor</label>
                                            <input type="text" name="direccionP" id="" class="form-control" value="<?= $proveedor->result()[0]->direccionproveedor ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Empresa Proveedor</label>
                                            <input type="text" name="empresaP" id="" class="form-control" value="<?= $proveedor->result()[0]->nombreempresa ?>">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <button class="btn btn-warning" type="button" onclick="modificar()">Modificar</button>
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
