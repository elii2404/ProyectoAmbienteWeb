<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Administrativo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
           
           
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .link-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .link-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php require('./layout/navADMIN.php') ?>
<div class="container">
    <h1>Bienvenido al Control Administrativo de Tu Heladería</h1>
    <p>Gestiona los productos, categorías y usuarios de tu heladería de manera fácil y rápida.</p>
    <a href="VerProductos.php" class="link-btn">Ver y Administrar Productos</a>
    <a href="VerCategorias.php" class="link-btn">Ver y Administrar Categorías</a>
    <a href="VerUsuarios.php" class="link-btn">Ver y Administrar Usuarios</a>
    <hr>

    <h2>Destacados</h2>
    <p>Descubre algunos de los productos más destacados de tu heladería.</p>

    <div class="card-group">
        <div class="card">
            <img src="../assets/cono1.jpg" class="card-img-top" alt="Cono de Helado">
            <div class="card-body">
                <h5 class="card-title">Cono de Helado</h5>
                <p class="card-text">¡Prueba nuestro delicioso cono de helado! Una opción clásica que nunca pasa de moda.</p>
                <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            </div>
        </div>
        <div class="card">
            <img src="../assets/helado5.png" class="card-img-top" alt="Helado Variado">
            <div class="card-body">
                <h5 class="card-title">Variedad de Helados</h5>
                <p class="card-text">Descubre nuestra amplia variedad de helados, ¡para todos los gustos y preferencias!</p>
                <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            </div>
        </div>
        <div class="card">
            <img src="../assets/helado6.png" class="card-img-top" alt="Helado Exquisito">
            <div class="card-body">
                <h5 class="card-title">Helado Exquisito</h5>
                <p class="card-text">Prueba nuestro helado exquisito, una experiencia única que deleitará tu paladar.</p>
                <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            </div>
        </div>
    </div>
</div>
<hr>



    <?php require('./layout/footer.php') ?>
</body>
</html>
