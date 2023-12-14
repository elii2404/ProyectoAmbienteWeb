<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php require('./layout/navADMIN.php') ?>

    <div class="container mt-5">
        <h1>Lista de Usuarios</h1>
        <hr>
        <a class="btn btn-success" href="nuevo_usuario.php">Agregar Usuario <i class="fa fa-plus"></i> </a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once '../controllers/UsuarioControlador.php';
                    $usuarioControlador = new UsuarioControlador();
                    $usuarios = $usuarioControlador->obtenerUsuarios();

                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                        echo "<td>{$usuario['usuarioID']}</td>";
                        echo "<td>{$usuario['usuarioNombreCompleto']}</td>";
                        echo "<td>{$usuario['usuarioCorreo']}</td>";
                        echo "<td>{$usuario['rol']}</td>";
                        echo "<td>
                                <a href='editar_usuario.php?id={$usuario['usuarioID']}' class='btn btn-warning'>Editar</a>
                                <a href='eliminar_usuario.php?id={$usuario['usuarioID']}' class='btn btn-danger'>Eliminar</a>
                            </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a class="btn btn-info" href="gestion.php">Regresar <i class="fa fa-plus"></i> </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
