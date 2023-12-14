<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Categoría</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Nueva Categoría</h1>
        <form action="nueva_categoria.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre de la Categoría" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Categoría</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once '../controllers/CategoriaControlador.php';

        $nombreCategoria = $_POST['nombre'];

        $categoriaControlador = new CategoriaControlador();
        $categoriaControlador->agregarNuevaCategoria($nombreCategoria);
        echo '<script>
                Swal.fire({
                    title: "Categoría agregada con éxito",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location.href = "VerCategorias.php"; // Cambia esto a la página a la que quieres redirigir después de agregar una categoría
                }, 1500);
              </script>';
    }
    ?>
</body>
</html>
