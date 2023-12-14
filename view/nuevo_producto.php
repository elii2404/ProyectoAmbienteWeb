<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Nuevo Producto</h1>
        <form action="nuevo_producto.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="categoria" required>
                    <option value="">Selecciona una categoría</option>
                    <?php
                        require_once '../controllers/ProductoControlador.php';
                        $productoControlador = new ProductoControlador();
                        $categorias = $productoControlador->obtenerCategorias();
                        foreach ($categorias as $categoria) {
                            echo "<option value='{$categoria['categoriaID']}'>{$categoria['nombre']}</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="precio" placeholder="Precio" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="descripcion" placeholder="Descripción" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" class="form-control-file" name="imagen" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/ProductoControlador.php';

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $imagenNombre = $_FILES['imagen']['name'];
    $imagenTmp = $_FILES['imagen']['tmp_name'];
    $carpetaDestino = '../assets/';
    $rutaImagen = $carpetaDestino . $imagenNombre;

    move_uploaded_file($imagenTmp, $rutaImagen);

    $productoControlador = new ProductoControlador();
    $productoControlador->agregarNuevoProducto($nombre, $cantidad, $categoria, $precio, $descripcion, $rutaImagen);

    echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Producto agregado con éxito',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'VerProductos.php';
                }
            });
         </script>";
    exit();
}
?>

