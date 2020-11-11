<?php 
class Productos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listarInformacion(){
        $sentencia = $this->db->query("SELECT id, nombre_producto, referencia, precio, peso, categoria, stock, fecha_registro, fecha_ultima_venta FROM productos");

        if ($sentencia->num_rows()>0) {
            $array = array("existe" => true, "result" => $sentencia->result());
        } else {
            $array = array("existe" => false, "result" => '');
        }

        return $array;
    }

    public function infoProducto($id){
        $sentencia = $this->db->query("SELECT id, nombre_producto, referencia, precio, peso, categoria, stock, fecha_registro, fecha_ultima_venta FROM productos WHERE id = '$id'");

        if ($sentencia->num_rows()>0) {
            $array = array("existe" => true, "result" => $sentencia->result());
        } else {
            $array = array("existe" => false, "result" => '');
        }

        return $array;
    }

    public function deteleProducto($id){
        $sentencia = $this->db->query("DELETE FROM productos WHERE id = '$id'");

        if ($sentencia) {
            return true;
        } else {
            return false;
        }

        return $array;
    }

    public function insertProductos($nombre, $referencia, $precio, $peso, $categoria, $stock){
        
        $v1 = $nombre;
        $v2 = $referencia;
        $v3 = $precio;
        $v4 = $peso;
        $v5 = $categoria;
        $v6 = date("Y-m-d H:i:s");
        $v7 = $stock;

        $query = $this->db->query("INSERT INTO productos(nombre_producto, referencia, precio, peso, categoria, stock, fecha_registro) VALUES('$v1', '$v2', '$v3', '$v4', '$v5', '$v7', '$v6')");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProductos($id, $nombre, $referencia, $precio, $peso, $categoria, $stock){

        $query = $this->db->query("UPDATE productos SET nombre_producto = '$nombre', referencia = '$referencia', precio = '$precio', peso = '$peso', categoria = '$categoria', stock = '$stock' WHERE id = '$id'");

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarStock($id, $cantidad){
        $sentencia = $this->db->query("UPDATE productos SET stock = stock - $cantidad WHERE id = $id");
    }

    public function insertFactura($id_producto, $cantidad, $total){
        $fecha = date("Y-m-d H:i:s");
        $sentencia = $this->db->query("INSERT INTO facturas(id_producto, cantidad, total, fecha_compra) VALUES('$id_producto', '$cantidad', '$total', '$fecha')");

        if($sentencia){
            return true;
        } else{
            return false;
        }
    }
}
?>