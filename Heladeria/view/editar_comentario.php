<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/ComentarioControlador.php';

    // Obtener la información del comentario por su ID
    $comentarioControlador = new ComentarioControlador();
    $comentarioID = $_GET['id'];
    $comentario = $comentarioControlador->obtenerComentarioPorID($comentarioID);

    if (!$comentario) {
        // Redirigir a una página de error o mostrar un mensaje al usuario
        echo "Comentario no encontrado";
        exit();
    }

} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar el formulario de edición
    require_once '../controllers/ComentarioControlador.php';

    $comentarioControlador = new ComentarioControlador();
    $comentarioID = $_POST['comentarioID'];
    $nombreUsuario = $_POST['nombre_usuario'];
    $comentarioTexto = $_POST['comentario'];

    $comentarioControlador->editarComentario($comentarioID, $nombreUsuario, date('Y-m-d'), $comentarioTexto);

    // Redirigir a la página de VerComentarios después de editar
    header('Location: VerComentarios.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comentario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Editar Comentario</h1>
        <form action="editar_comentario.php" method="post">
            <input type="hidden" name="comentarioID" value="<?= $comentario['id'] ?>">

            <div class="form-group">
                <label for="nombre_usuario">Nombre de Usuario:</label>
                <input type="text" class="form-control" name="nombre_usuario" value="<?= $comentario['nombre_usuario'] ?>" required>
            </div>

            <div class="form-group">
                <label for="comentario">Comentario:</label>
                <textarea class="form-control" name="comentario" required><?= $comentario['comentario'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
