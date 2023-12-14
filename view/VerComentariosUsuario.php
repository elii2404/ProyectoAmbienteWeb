<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Comentarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .comment-container {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
        }

        .comment-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .comment-actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
    <?php require('./layout/navADMIN.php') ?>

    <div class="container mt-5">
        <h1>Lista de Comentarios</h1>
        <hr>
        <a class="btn btn-success" href="nuevo_comentario.php">Agregar Comentario <i class="fa fa-plus"></i> </a>
<hr>
        <?php
        require_once '../controllers/ComentarioControlador.php'; // Change to the appropriate controller file
        $comentarioControlador = new ComentarioControlador(); // Change to the appropriate controller instance
        $comentarios = $comentarioControlador->obtenerComentarios();

        foreach ($comentarios as $comentario) {
            echo '<div class="comment-container">';
            echo '<div class="comment-header">';
            echo "<span>ID: {$comentario['id']}</span>";
            echo "<span>Nombre de Usuario: {$comentario['nombre_usuario']}</span>";
            echo "<span>Fecha: {$comentario['fecha']}</span>";
            echo '</div>';
            echo "<p>{$comentario['comentario']}</p>";
            echo '<div class="comment-actions">';
            echo '</div>';
            echo '</div>';
        }
        ?>
        <a class="btn btn-info" href="gestion.php">Regresar <i class="fa fa-plus"></i> </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
</body>

</html>
