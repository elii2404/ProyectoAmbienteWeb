<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Comentarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php require('./layout/navADMIN.php') ?>

    <div class="container mt-5">
        <h1>Lista de Comentarios</h1>
        <hr>
        <a class="btn btn-success" href="nuevo_comentario.php">Agregar Comentario <i class="fa fa-plus"></i> </a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Usuario</th>
                    <th>Fecha</th>
                    <th>Comentario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../controllers/ComentarioControlador.php'; // Change to the appropriate controller file
                $comentarioControlador = new ComentarioControlador(); // Change to the appropriate controller instance
                $comentarios = $comentarioControlador->obtenerComentarios();

                foreach ($comentarios as $comentario) {
                    echo "<tr>
                            <td>{$comentario['id']}</td>
                            <td>{$comentario['nombre_usuario']}</td>
                            <td>{$comentario['fecha']}</td>
                            <td>{$comentario['comentario']}</td>
                            <td>
                                <a href='editar_comentario.php?id={$comentario['id']}' class='btn btn-primary'>Editar</a>
                                <button class='btn btn-danger' onclick='eliminarComentario({$comentario['id']})'>Eliminar</button>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-info" href="gestion.php">Regresar <i class="fa fa-plus"></i> </a>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function eliminarComentario(comentarioID) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'eliminar_comentario.php?id=' + comentarioID;
                }
            });
        }
    </script>

</body>

</html>
