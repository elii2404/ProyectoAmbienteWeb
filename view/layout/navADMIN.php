<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barra de Navegación Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #F08080; 
            background-image: linear-gradient(60deg, #0B5345 0%, #76D7C4 100%); 

        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: black; 
        }
      

        .navbar-brand img {
            width: 100px; 

            margin-right: 10px; 
           
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index_admin.php">
        <img src="../assets/logo.png" alt="Logo de la heladería"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index_admin.php">Inicio <span class="sr-only">(actual)</span></a>
                    </li>
                    <?php
                    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 'administrador') {
                        echo '<a class="nav-link" href="gestion.php">Gestion</a>';
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="tienda.php">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="serviciosADMIN.php">Servicios</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="gestion.php">Gestion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="VerComentarios.php">Comentarios</a>
                    </li>
                    <li class="nav-item">
    <a class="nav-link" href="../controllers/cerrar_sesion.php" style="color: red;">Cerrar Sesión</a>
</li>


                    <li class="nav-item">
                    <a href="carrito.php" >
                         <img src="../assets/carrito.png" alt="Carrito" width="60">
                         </a>
                            </li>
                 
                </ul>
            </div>
         
        </div>
        </nav>
        
    </header>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>