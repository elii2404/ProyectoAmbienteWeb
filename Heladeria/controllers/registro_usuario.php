<!DOCTYPE html>
<html lang="en">
<head>

</head>
<?php
include '../config/Conexion.php';
$usuarioNombreCompleto = $_POST['usuarioNombreCompleto'];
$usuarioCorreo = $_POST['usuarioCorreo'];
$usuarioContrasena = $_POST['usuarioContrasena'];
$usuarioContrasena = hash('sha512', $usuarioContrasena); // Encriptar Contraseña
$fecha = date('Y-m-d H:i:s'); // Formatear la fecha en el formato requerido
$query = "INSERT INTO usuarios(usuarioNombreCompleto, usuarioCorreo, usuarioContrasena, fecha) 
        VALUES('$usuarioNombreCompleto','$usuarioCorreo','$usuarioContrasena','$fecha')";
try {
    $conexion = Conexion::conectar(); // Obtener la conexión
    $conexion->exec($query); // Ejecutar la consulta

    // Obtener el ID del usuario recién insertado
    $lastInsertedId = $conexion->lastInsertId();

    // Asignar el rol 2 (usuario regular) al nuevo usuario
    $rolQuery = "UPDATE usuarios SET rol = 'usuario' WHERE usuarioID = $lastInsertedId";
    $conexion->exec($rolQuery);

    echo '<script>
            alert("Usuario Registrado. Presiona Ok para ir al login");
            window.location.href = "../view/login.php";
          </script>';
} catch (PDOException $ex) {
    echo "Error al registrar: " . $ex->getMessage();
}
?>

