<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Consultar Pedidos</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Consultar
            </div>
            <div class="panel-body">
            <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Producto</th>
                            <th class="text-center">Insumos</th>
                            <th class="text-center">Procesos</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Empresa</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pedidos as $value): ?>
                            <tr>
                                <td class="text-center"><?= $value->producto ?></td>
                                <td class="text-center"><button type="button" onclick="traerMateria('<?= $value->codigo ?>')" class="btn btn-outline btn-default btn-sm"><i class="fa fa-navicon fa-fw"></i> Insumos</button></td>
                                <td class="text-center"><button type="button" onclick="traerProceso('<?= $value->codigo ?>')" class="btn btn-outline btn-default btn-sm"><i class="fa fa-navicon fa-fw"></i> Procesos</button></td>
                                <td class="text-center"><?= $value->cantidad ?></td>
                                <td class="text-center"><?= $value->fecha ?></td>
                                <td class="text-center"><?= $value->cliente ?></td>
                                <td class="text-center"><?= "$".$value->total ?></td>
                                <td class="text-center"><?= $value->codigo_estado==1?"Pendiente":"" ?></td>
                                <td class="text-center"><button type="button" class="btn btn-outline btn-primary btn-sm" onclick="editarP('<?= $value->codigo ?>')"><i class="fa fa-edit fa-fw"></i> Modificar</button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">Producto</th>
                            <th class="text-center">Insumos</th>
                            <th class="text-center">Procesos</th>
                            <th class="text-center">Cantidad</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Empresa</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Modificar</th>
                        </tr>
                    </tfoot>
                </table>
            </div>  
        </div>   
    </div>
    <!-- /.col-lg-12 -->
    <!-- Modal Materia Prima -->
    <div class="modal fade" id="insumos">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tipo Proceso</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Insumos</th>
                            <th>Valor Insumos</th>
                            <th>Total Insumos</th>
                        </tr>
                    </thead>
                    <tbody id="insumo">
                    </tbody>
                </table>
            </div>      
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Cerrar</button>              
            </div>
            </div>
        </div>
    </div>
    <!-- Modal Tipo Proceso -->
    <div class="modal fade" id="procesos">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tipo Proceso</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Procesos</th>
                            <th>Valor Procesos</th>
                            <th>Total Procesos</th>
                        </tr>
                    </thead>
                    <tbody id="proceso">
                    </tbody>
                </table>
            </div>      
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Cerrar</button>              
            </div>
            </div>
        </div>
    </div>
    <!-- Model Modificar -->
    <div class="modal fade" id="editarPe">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tipo Proceso</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <div class="modal-body">
                <form id="editarPedido">
                    <fieldset id="pegar_pedidos">
                        <input type="hidden" name="" id="idPe">
                        <div class="form-group col-xs-6">
                            <label for="clienteP">Cliente</label>
                            <input type="hidden" id="idC" class="form-control">
                            <input type="text" id="clienteP" class="form-control" readonly>
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="cantidadC">Cantidad Insumo</label>
                            <input type="number" class="form-control" id="cantidadC" name="cantidadP">
                        </div>
                        <div class="form-group col-xs-12">
                            <label for="cantidadC">Nombre Pedido</label>
                            <input type="number" class="form-control" id="pedidoC" readonly>
                        </div>
                    </fieldset>
                </form>
            </div>      
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="refrescar()">Refrescar</button>              
            </div>
            </div>
        </div>
    </div>
<!-- /.row -->


