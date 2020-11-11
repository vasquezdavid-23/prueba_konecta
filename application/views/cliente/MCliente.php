<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar Cliente</h1>
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
                                    <form id="modificarCliente">
                                        <input type="hidden" name="idC" value="<?= $cliente->result()[0]->idcliente ?>">
                                        <div class="form-group col-xs-6">
                                            <label for="">Nombre Cliente</label>
                                            <input type="text" name="nombreC" id="" class="form-control" value="<?= $cliente->result()[0]->nombrecliente ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Apellido Cliente</label>
                                            <input type="text" name="apellidoC" id="" class="form-control" value="<?= $cliente->result()[0]->apellidocliente ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Razon Social</label>
                                            <input type="text" name="razonC" id="" class="form-control" value="<?= $cliente->result()[0]->razonsocial ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Ciudad <span class="req">*</span></label>
                                            <input type="text" name="ciudadC" id="" class="form-control" value="<?= $cliente->result()[0]->ciudad ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Descuento Cliente <span class="req">*</span></label>
                                            <input type="number" name="descuentoC" id="" max="20" class="form-control" value="<?= $cliente->result()[0]->descuento ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Telefono Cliente</label>
                                            <input type="number" name="telefonoC" id="" class="form-control" value="<?= $cliente->result()[0]->telefono ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Nit <span class="req">*</span></label>
                                            <input type="text" name="nitC" id="" class="form-control" value="<?= $cliente->result()[0]->nit ?>">
                                        </div>
                                        <div class="form-group col-xs-6">
                                            <label for="">Nombre Empresa <span class="req">*</span></label>
                                            <input type="text" name="empresaC" id="" class="form-control" value="<?= $cliente->result()[0]->nombreempresa ?>">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <label for="">Correo Cliente</label>
                                            <input type="email" name="correoC" id="" class="form-control" value="<?= $cliente->result()[0]->correocliente ?>">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <button class="btn btn-warning" type="button" onclick="modificarC()">Modificar</button>
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
