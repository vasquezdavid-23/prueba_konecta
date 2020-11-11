<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Registrar Pedidos</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-4" id="div_1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Paso 1
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group col-xs-12">
                        <label for="cliente">Clientes</label>
                        <select name="" id="cliente" class="form-control">
                            <option value="0">Seleccione...</option>
                            <?php foreach($cliente->result() as $value): ?>
                                <option value="<?= $value->idcliente ?>"><?= $value->nombreempresa." - ".$value->nit." - ".$value->ciudad ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="cantidad">Cantidad Metros</label>
                        <input type="number" class="form-control" id="cantidad" min="1">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="mtp">Materias involucradas</label>
                        <input type="number" class="form-control" id="mtp" min="2">
                    </div>
                    <div class="form-group col-xs-12">
                    <button type="button" onclick="materiasss()" class="btn btn-outline btn-primary btn-block">Guardar y Continuar</button>
                    </div>
                </form>
            </div>  
        </div>   
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4" id="div_2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Paso 2
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group col-xs-12" hidden="">
                        <label for="materia_n">Clientes</label>
                        <select name="" id="materia_n" class="form-control">
                            <option value="0">Seleccione...</option>
                            <?php foreach($materia->result() as $value): ?>
                                <option value="<?= $value->idcategoriasmateriaprima."".$value->idmateriaprima ?>"><?= $value->nombremateriaprima.", ".$value->color.", ".$value->ancho."mm, ".$value->peso."grs, ".$value->descripcion ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div id="pegar"></div>  
                    <div class="form-group col-xs-12">                 
                    <button type="button" onclick="procesoss()" class="btn btn-outline btn-primary btn-block">Guardar y Continuar</button>
                    </div>
                </form>
            </div>  
        </div>   
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-4" id="div_3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Paso 3
            </div>
            <div class="panel-body">
                <form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Proceso</th>
                                <th>Valor $</th>
                            </tr>
                        </thead>
                        <tbody id="lista_proceso">

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Proceso</th>
                                <th>Valor $</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="form-group col-xs-12">
                    <button type="button" onclick="terminar()" class="btn btn-outline btn-primary btn-block">Guardar y Continuar</button>
                    </div>
                </form>
            </div>  
        </div>   
    </div>
    <!-- /.col-lg-4 -->
    <div class="col-lg-8" id="pedidos_completo" hidden="">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-user fa-fw"></i> Formulario
            </div>
            <div class="panel-body">
                <form id="registrarPedido">
                    <fieldset id="paso_final">
                    
                    </fieldset>
                    <div class="form-group col-xs-12">
                        <button type="button" onclick="registrarP()" class="btn btn-success">Registrar</button>
                    </div>
                </form>
            </div>  
        </div>   
    </div>
</div>
<!-- /.row -->
