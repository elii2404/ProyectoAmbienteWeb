<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Nuevo Usuario</h1>
        <form action="nuevo_usuario.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nombreCompleto" placeholder="Nombre Completo" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="correo" placeholder="Correo" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
    <label for="rol">Rol:</label>
    <select class="form-control" name="rol" required>
        <option value="usuario">Usuario</option>
        <option value="administrador">Administrador</option>
    </select>
</div>

            <button type="submit" class="btn btn-primary">Agregar Usuario</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/UsuarioControlador.php';

    $nombreCompleto = $_POST['nombreCompleto'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    $usuarioControlador = new UsuarioControlador();
    $usuarioControlador->agregarNuevoUsuario($nombreCompleto, $correo, $contrasena, $rol);

    echo "<script>alert('Usuario agregado con éxito');</script>";
    header('Location: VerUsuarios.php');
    exit();
}
?>
