<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/CategoriaControlador.php';

    $categoriaControlador = new CategoriaControlador();
    $categoriaID = $_GET['id'];
    $categoriaControlador->eliminarCategoria($categoriaID);

    header('Location: VerCategorias.php');
    exit();
}
?>
