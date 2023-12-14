<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barra de Navegación Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: crimson; 
            background-image: linear-gradient(60deg, #4A235A 0%, #AF7AC5 100%); 

        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: white; 
        }
        
        .navbar-brand img {
            width: 100px; 
            margin-right: 10px; 
           
        }
    </style>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index_usuario.php">
        <img src="../assets/logo.png" alt="Logo de la heladería"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index_usuario.php">Inicio <span class="sr-only">(actual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tiendaUSUARIO.php">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="serviciosUSUARIO.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="VerComentariosUsuario.php">Comentario</a>
                </li>
                <li class="nav-item">
    <a class="nav-link" href="../controllers/cerrar_sesion.php" style="color: red;">Cerrar Sesión</a>
</li>

                <li class="nav-item">
                    <a href="carritoUSUARIO.php" >
                         <img src="../assets/carrito.png" alt="Carrito" width="60">
                         </a>
                        </li>
            </ul>
        </div>
    </nav>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
