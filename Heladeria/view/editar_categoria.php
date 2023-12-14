<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/CategoriaControlador.php';

    $categoriaControlador = new CategoriaControlador();
    $categoriaID = $_GET['id'];
    $categoria = $categoriaControlador->obtenerCategoriaPorID($categoriaID);

    if (!$categoria) {
        echo "Categoría no encontrada";
        exit();
    }

} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/CategoriaControlador.php';

    $categoriaControlador = new CategoriaControlador();
    $categoriaID = $_POST['categoriaID'];
    $nombre = $_POST['nombre'];

    $categoriaControlador->editarCategoria($categoriaID, $nombre);

    header('Location: VerCategorias.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Categoría</h1>
        <form action="editar_categoria.php" method="post">
            <input type="hidden" name="categoriaID" value="<?= $categoria['categoriaID'] ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?= $categoria['nombre'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
