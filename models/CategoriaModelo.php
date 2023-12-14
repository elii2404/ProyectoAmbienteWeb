<?php
require_once "../config/conexion.php";

class CategoriaModelo {
    public function agregarCategoria($nombre) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("INSERT INTO categoria (nombre) VALUES (?)");
        $stmt->execute([$nombre]);
    }

    public function editarCategoria($categoriaID, $nombre) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("UPDATE categoria SET nombre = ? WHERE categoriaID = ?");
        $stmt->execute([$nombre, $categoriaID]);
    }

    public function eliminarCategoria($categoriaID) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("DELETE FROM categoria WHERE categoriaID = ?");
        $stmt->execute([$categoriaID]);
    }

    public function obtenerCategorias() {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("SELECT * FROM categoria");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerCategoriaPorID($categoriaID) {
        $conexion = Conexion::conectar();
        $stmt = $conexion->prepare("SELECT * FROM categoria WHERE categoriaID = ?");
        $stmt->execute([$categoriaID]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
