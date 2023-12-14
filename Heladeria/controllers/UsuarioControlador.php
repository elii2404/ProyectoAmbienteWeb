<?php
require_once "../models/UsuarioModelo.php";

class UsuarioControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new UsuarioModelo();
    }

    public function agregarNuevoUsuario($nombreCompleto, $correo, $contrasena, $rol) {
        $this->modelo->agregarUsuario($nombreCompleto, $correo, $contrasena, $rol);
    }

    public function editarUsuario($usuarioID, $nombreCompleto, $correo, $contrasena, $rol) {
        $this->modelo->editarUsuario($usuarioID, $nombreCompleto, $correo, $contrasena, $rol);
    }

    public function eliminarUsuario($usuarioID) {
        $this->modelo->eliminarUsuario($usuarioID);
    }

    public function obtenerUsuarios() {
        return $this->modelo->obtenerUsuarios();
    }

    public function obtenerUsuarioPorID($usuarioID) {
        return $this->modelo->obtenerUsuarioPorID($usuarioID);
    }
}
?>