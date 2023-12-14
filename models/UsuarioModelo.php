<?php
require_once "../config/conexion.php";

class UsuarioModelo {
    public function agregarUsuario($nombreCompleto, $correo, $contrasena, $rol) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("INSERT INTO usuarios (usuarioNombreCompleto, usuarioCorreo, usuarioContrasena, rol) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nombreCompleto, $correo, $contrasena, $rol]);
    }

    public function editarUsuario($usuarioID, $nombreCompleto, $correo, $contrasena, $rol) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("UPDATE usuarios SET usuarioNombreCompleto = ?, usuarioCorreo = ?, usuarioContrasena = ?, rol = ? WHERE usuarioID = ?");
        $stmt->execute([$nombreCompleto, $correo, $contrasena, $rol, $usuarioID]);
    }

    public function eliminarUsuario($usuarioID) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("DELETE FROM usuarios WHERE usuarioID = ?");
        $stmt->execute([$usuarioID]);
    }

    public function obtenerUsuarios() {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("SELECT * FROM usuarios");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerUsuarioPorID($usuarioID) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuarioID = ?");
        $stmt->execute([$usuarioID]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
