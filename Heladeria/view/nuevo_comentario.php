<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Comentario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <div class="container mt-5">
        <h1>Agregar Nuevo Comentario</h1>
        <form action="nuevo_comentario.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nombre_usuario" placeholder="Nombre de Usuario" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="comentario" placeholder="Comentario" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Comentario</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/ComentarioControlador.php';

    $nombreUsuario = $_POST['nombre_usuario'];
    $comentario = $_POST['comentario'];

    $comentarioControlador = new ComentarioControlador();
    $comentarioControlador->agregarNuevoComentario($nombreUsuario, date('Y-m-d'), $comentario);

    echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Comentario agregado con éxito',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'VerComentarios.php';
                }
            });
         </script>";
    exit();
}
?>
