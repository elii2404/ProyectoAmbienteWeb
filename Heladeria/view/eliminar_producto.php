<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/ProductoControlador.php';

    $productoControlador = new ProductoControlador();
    $productoControlador->eliminarProducto($_GET['id']);

    header('Location: VerProductos.php');
    exit();
}
?>
