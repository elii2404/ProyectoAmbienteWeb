<?php
require_once "../models/ComentarioModelo.php";

class ComentarioControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new ComentarioModelo();
    }

    public function agregarNuevoComentario($nombreUsuario, $fecha, $comentario) {
        $this->modelo->agregarComentario($nombreUsuario, $fecha, $comentario);
    }

    public function editarComentario($comentarioID, $nombreUsuario, $fecha, $comentario) {
        $this->modelo->editarComentario($comentarioID, $nombreUsuario, $fecha, $comentario);
    }

    public function eliminarComentario($comentarioID) {
        $this->modelo->eliminarComentario($comentarioID);
    }

    public function obtenerComentarios() {
        return $this->modelo->obtenerComentarios();
    }


    public function obtenerComentarioPorID($comentarioID) {
        return $this->modelo->obtenerComentarioPorID($comentarioID);
    }
}
?>
