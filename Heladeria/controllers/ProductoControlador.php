<?php
require_once "../models/ProductoModelo.php";

class ProductoControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new ProductoModelo();
    }

    public function agregarNuevoProducto($nombre, $cantidad, $categoria, $precio, $descripcion, $imagen) {
        $this->modelo->agregarProducto($nombre, $cantidad, $categoria, $precio, $descripcion, $imagen);
    }

    public function editarProducto($prodID, $nombre, $cantidad, $categoria, $precio, $descripcion, $imagen) {
        $this->modelo->editarProducto($prodID, $nombre, $cantidad, $categoria, $precio, $descripcion, $imagen);
    }

    public function eliminarProducto($prodID) {
        $this->modelo->eliminarProducto($prodID);
    }

    public function obtenerProductos() {
        return $this->modelo->obtenerProductos();
    }

    public function obtenerCategorias() {
        return $this->modelo->obtenerCategorias();
    }

public function obtenerProductoPorID($productoID) {
    return $this->modelo->obtenerProductoPorID($productoID);
}

}
?>
