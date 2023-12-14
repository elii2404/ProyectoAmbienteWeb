<?php
require_once "../config/conexion.php";

class ProductoModelo {
    public function agregarProducto($nombre, $cantidad, $categoria, $precio, $descripcion, $imagen) {
        $conexion = Conexion::conectar();
        
        $stmt = $conexion->prepare("INSERT INTO productos (productoNombre, productoCantidad, categoriaID, productoPrecio, productoDescripcion, imagen) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nombre, $cantidad, $categoria, $precio, $descripcion, $imagen]);
    }

    public function editarProducto($prodID, $nombre, $cantidad, $categoria, $precio, $descripcion, $imagen) {
        $conexion = Conexion::conectar();
        
        $stmt = $conexion->prepare("UPDATE productos SET productoNombre = ?, productoCantidad = ?, categoriaID = ?, productoPrecio = ?, productoDescripcion = ?, imagen = ? WHERE productoID = ?");
        $stmt->execute([$nombre, $cantidad, $categoria, $precio, $descripcion, $imagen, $prodID]);
    }

    public function eliminarProducto($prodID) {
        $conexion = Conexion::conectar();
        
        $stmt = $conexion->prepare("DELETE FROM productos WHERE productoID = ?");
        $stmt->execute([$prodID]);
    }

    public function obtenerProductos() {
        $conexion = Conexion::conectar();

        $stmt = $conexion->prepare("SELECT * FROM productos");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerCategorias() {
        $conexion = Conexion::conectar();

        $stmt = $conexion->prepare("SELECT * FROM categoria");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

public function obtenerProductoPorID($productoID) {
    $conexion = Conexion::conectar();

    $stmt = $conexion->prepare("SELECT * FROM productos WHERE productoID = ?");
    $stmt->execute([$productoID]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
?>
