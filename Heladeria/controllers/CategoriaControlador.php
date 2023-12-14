<?php
require_once "../models/CategoriaModelo.php";

class CategoriaControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new CategoriaModelo();
    }

    public function agregarNuevaCategoria($nombre) {
        $this->modelo->agregarCategoria($nombre);
    }

    public function editarCategoria($categoriaID, $nombre) {
        $this->modelo->editarCategoria($categoriaID, $nombre);
    }

    public function eliminarCategoria($categoriaID) {
        $this->modelo->eliminarCategoria($categoriaID);
    }

    public function obtenerCategorias() {
        return $this->modelo->obtenerCategorias();
    }

    public function obtenerCategoriaPorID($categoriaID) {
        return $this->modelo->obtenerCategoriaPorID($categoriaID);
    }
}
?>
