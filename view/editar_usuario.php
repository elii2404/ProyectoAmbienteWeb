<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/UsuarioControlador.php';

    $usuarioControlador = new UsuarioControlador();
    $usuarioID = $_GET['id'];
    $usuario = $usuarioControlador->obtenerUsuarioPorID($usuarioID);

    if (!$usuario) {
        echo "Usuario no encontrado";
        exit();
    }

} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/UsuarioControlador.php';

    $usuarioControlador = new UsuarioControlador();
    $usuarioID = $_POST['usuarioID'];
    $nombreCompleto = $_POST['nombreCompleto'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    $usuarioControlador->editarUsuario($usuarioID, $nombreCompleto, $correo, $contrasena, $rol);

    header('Location: VerUsuarios.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Usuario</h1>
        <form action="editar_usuario.php" method="post">
            <input type="hidden" name="usuarioID" value="<?= $usuario['usuarioID'] ?>">
            
            <div class="form-group">
                <input type="text" class="form-control" name="nombreCompleto" placeholder="Nombre Completo" value="<?= $usuario['usuarioNombreCompleto'] ?>" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="correo" placeholder="Correo" value="<?= $usuario['usuarioCorreo'] ?>" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" value="<?= $usuario['usuarioContrasena'] ?>" required>
            </div>
            <div class="form-group">
    <label for="rol">Rol:</label>
    <select class="form-control" name="rol" required>
        <option value="usuario" <?= ($usuario['rol'] == 'usuario') ? 'selected' : '' ?>>Usuario</option>
        <option value="administrador" <?= ($usuario['rol'] == 'administrador') ? 'selected' : '' ?>>Administrador</option>
    </select>
</div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
