<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/ComentarioControlador.php';

    $comentarioControlador = new ComentarioControlador();
    $comentarioControlador->eliminarComentario($_GET['id']);

    header('Location: VerComentarios.php');
    exit();
}
?>
