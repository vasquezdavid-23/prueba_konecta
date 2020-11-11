<?php 
class Productos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Productos_model');
    }

    public function index()
    {
        $this->load->view("productos/RProductos");
    }

    public function crearProducto(){
        $nombre     = $_POST["nombre"];
        $referencia = $_POST["referencia"];
        $precio     = $_POST["precio"];
        $peso       = $_POST["peso"];
        $categoria  = $_POST["categoria"];
        $stock      = $_POST["stock"];

        if ($this->Productos_model->insertProductos($nombre, $referencia, $precio, $peso, $categoria, $stock)) {
            $acciones = array("result" => true, "mensaje" => 'El producto se ha guardado con éxito', "respuesta" => '');
        } else {
            $acciones = array("result" => false, "mensaje" => 'Hubo un porblema al guardar la información', "respuesta" => '');
        }

        echo json_encode($acciones);
    }

    public function editarProducto(){
        $id         = $_POST["id"];
        $nombre     = $_POST["nombre"];
        $referencia = $_POST["referencia"];
        $precio     = $_POST["precio"];
        $peso       = $_POST["peso"];
        $categoria  = $_POST["categoria"];
        $stock      = $_POST["stock"];

        if ($this->Productos_model->updateProductos($id, $nombre, $referencia, $precio, $peso, $categoria, $stock)) {
            $acciones = array("result" => true, "mensaje" => 'El producto se ha actualizado con éxito', "respuesta" => '');
        } else {
            $acciones = array("result" => false, "mensaje" => 'Hubo un porblema al actualizar la información', "respuesta" => '');
        }

        echo json_encode($acciones);
    }

    public function listarProductos(){
        $resultado = $this->Productos_model->listarInformacion();
        $acciones = array("result" => $resultado["existe"], "mensaje" => '', "respuesta" => $resultado["result"]);
        echo json_encode($acciones);
    }

    public function infoProducto(){
        $id         = $_POST["id"];
        $resultado = $this->Productos_model->infoProducto($id);
        $acciones = array("result" => $resultado["existe"], "mensaje" => '', "respuesta" => $resultado["result"][0]);
        echo json_encode($acciones);
    }

    public function eliminarProducto(){
        $id         = $_POST["id"];

        if ($this->Productos_model->deteleProducto($id)) {
            $acciones = array("result" => true, "mensaje" => 'La información se ha eliminado', "respuesta" => '');
        } else {
            $acciones = array("result" => false, "mensaje" => 'La información no se eliminó', "respuesta" => '');
        }
        echo json_encode($acciones);
    }

    function compraProducto(){
        $id         = $_POST["id"];
        $cantidad   = $_POST["cantidad"];
        $total      = $_POST["total"];

        if ($this->Productos_model->insertFactura($id, $cantidad, $total)) {
            $this->Productos_model->actualizarStock($id, $cantidad);
            $acciones = array("result" => true, "mensaje" => 'La compra se ha hecho con éxito', "respuesta" => '');
        } else {
            $acciones = array("result" => false, "mensaje" => 'Error a finalizar la compra', "respuesta" => '');
        }
        echo json_encode($acciones);
    }
}


?>