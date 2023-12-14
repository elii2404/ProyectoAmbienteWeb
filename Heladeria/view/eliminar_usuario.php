<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/UsuarioControlador.php';

    $usuarioControlador = new UsuarioControlador();
    $usuarioID = $_GET['id'];
    $usuarioControlador->eliminarUsuario($usuarioID);

    header('Location: VerUsuarios.php');
    exit();
}
?>
