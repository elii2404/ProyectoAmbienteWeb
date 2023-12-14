<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Agrega la referencia a SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Registro</title>
</head>

<body class="bg-light" style="            background-image: linear-gradient(60deg, #F1C40F 0%, #FEF9E7 100%); 
">
<?php require('./layout/nav.php') ?>
<HR>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
            <div class="login-content bg-white p-4 rounded shadow">
                <div class="login-header text-center">
                    <h3><strong>Registrarse</strong></h3>
                    <h5>Ingresa tus datos personales para registrarte</h5>
                </div>
                <div class="login-body">
                    <form role="form" action="../controllers/registro_usuario.php" method="POST" class="login-form">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" placeholder="Nombre" name="usuarioNombreCompleto" class="form-control">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" placeholder="Correo" name="usuarioCorreo" class="form-control">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" placeholder="Contraseña" name="usuarioContrasena" class="form-control">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control"><strong>Registrar</strong></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
