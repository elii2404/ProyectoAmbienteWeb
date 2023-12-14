<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    require_once '../controllers/ProductoControlador.php';

    // Obtener la información del producto por su ID
    $productoControlador = new ProductoControlador();
    $productoID = $_GET['id'];
    $producto = $productoControlador->obtenerProductoPorID($productoID);

    if (!$producto) {
        // Redirigir a una página de error o mostrar un mensaje al usuario
        echo "Producto no encontrado";
        exit();
    }

} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar el formulario de edición
    require_once '../controllers/ProductoControlador.php';

    $productoControlador = new ProductoControlador();
    $productoID = $_POST['productoID'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    // Procesar la imagen si se ha subido una nueva
    if ($_FILES['imagen']['size'] > 0) {
        $imagenNombre = $_FILES['imagen']['name'];
        $imagenTmp = $_FILES['imagen']['tmp_name'];
        $carpetaDestino = '../assets';
        $rutaImagen = $carpetaDestino . $imagenNombre;

        move_uploaded_file($imagenTmp, $rutaImagen);
    } else {
        // Si no se sube una nueva imagen, conservar la imagen existente
        $rutaImagen = $producto['imagen'];
    }

    $productoControlador->editarProducto($productoID, $nombre, $cantidad, $categoria, $precio, $descripcion, $rutaImagen);

    // Redirigir a la página de VerProductos después de editar
    header('Location: VerProductos.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Producto</h1>
        <form action="editar_producto.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="productoID" value="<?= $producto['productoID'] ?>">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?= $producto['productoNombre'] ?>" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" name="cantidad" value="<?= $producto['productoCantidad'] ?>" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select class="form-control" name="categoria" required>
                    <?php
                        $categorias = $productoControlador->obtenerCategorias();
                        foreach ($categorias as $categoria) {
                            $selected = ($producto['categoriaID'] == $categoria['categoriaID']) ? "selected" : "";
                            echo "<option value='{$categoria['categoriaID']}' $selected>{$categoria['nombre']}</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" class="form-control" name="precio" value="<?= $producto['productoPrecio'] ?>" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" name="descripcion" required><?= $producto['productoDescripcion'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen actual:</label>
                <img src="<?= $producto['imagen'] ?>" alt="Imagen actual" style="max-width: 100px; max-height: 100px;">
            </div>

            <div class="form-group">
                <label for="imagen">Nueva Imagen:</label>
                <input type="file" class="form-control-file" name="imagen" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
