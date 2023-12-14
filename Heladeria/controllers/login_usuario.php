<?php

require_once "../config/Conexion.php";

$usuarioCorreo = $_POST['usuarioCorreo'];
$usuarioContrasena = $_POST['usuarioContrasena'];

try {
    $conexion = Conexion::conectar();

    $sql = "SELECT * FROM usuarios WHERE usuarioCorreo = :usuarioCorreo AND usuarioContrasena = :usuarioContrasena";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':usuarioCorreo', $usuarioCorreo); // Corrección aquí
    $stmt->bindParam(':usuarioContrasena', $usuarioContrasena); // Corrección aquí
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario['rol'] == 'administrador') {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("location: ../view/index_admin.php");
        } else {
            header("location: ../view/index_usuario.php");
        }
    } else {
        echo '
        <script>
            alert("Usuario no existe");
            window.location = "../view/registro.php";
        </script>
        ';
        exit;
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
function mostrarNombreUsuario() {
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        echo 'Bienvenido, ' . $usuario['nombre']; // Ajusta 'nombre' según tu estructura de base de datos
    }
}
?>

