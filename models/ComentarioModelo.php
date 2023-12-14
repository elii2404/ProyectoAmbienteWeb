<?php
require_once "../config/conexion.php";

class ComentarioModelo {
    public function agregarComentario($nombreUsuario, $fecha, $comentario) {
        $conexion = Conexion::conectar();
        
        $stmt = $conexion->prepare("INSERT INTO comentarios (nombre_usuario, fecha, comentario) VALUES (?, ?, ?)");
        $stmt->execute([$nombreUsuario, $fecha, $comentario]);
    }
    public function editarComentario($comentarioID, $nombreUsuario, $fecha, $comentario) {
        $conexion = Conexion::conectar();
        
        $stmt = $conexion->prepare("UPDATE comentarios SET nombre_usuario = ?, fecha = ?, comentario = ? WHERE id = ?");
        $stmt->execute([$nombreUsuario, $fecha, $comentario, $comentarioID]);
    }

    public function eliminarComentario($comentarioID) {
        $conexion = Conexion::conectar();
        
        $stmt = $conexion->prepare("DELETE FROM comentarios WHERE id = ?");
        $stmt->execute([$comentarioID]);
    }

    public function obtenerComentarios() {
        $conexion = Conexion::conectar();

        $stmt = $conexion->prepare("SELECT * FROM comentarios");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Additional methods as needed

    public function obtenerComentarioPorID($comentarioID) {
        $conexion = Conexion::conectar();

        $stmt = $conexion->prepare("SELECT * FROM comentarios WHERE id = ?");
        $stmt->execute([$comentarioID]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
