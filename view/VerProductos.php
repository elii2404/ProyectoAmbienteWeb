<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php require('./layout/navADMIN.php') ?>

    <div class="container mt-5">
        <h1>Lista de Productos</h1>
        <hr>
        <a class="btn btn-success" href="nuevo_producto.php">Agregar Producto <i class="fa fa-plus"></i> </a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../controllers/ProductoControlador.php';
                $productoControlador = new ProductoControlador();
                $productos = $productoControlador->obtenerProductos();

                foreach ($productos as $producto) {
                    echo "<tr>
                            <td>{$producto['productoID']}</td>
                            <td>{$producto['productoNombre']}</td>
                            <td>{$producto['productoCantidad']}</td>
                            <td>{$producto['categoriaID']}</td>
                            <td>{$producto['productoPrecio']}</td>
                            <td>{$producto['productoDescripcion']}</td>
                            <td><img src='{$producto['imagen']}' alt='{$producto['productoNombre']}' style='max-width: 100px; max-height: 100px;'></td>
                            <td>
                                <a href='editar_producto.php?id={$producto['productoID']}' class='btn btn-primary'>Editar</a>
                                <button class='btn btn-danger' onclick='eliminarProducto({$producto['productoID']})'>Eliminar</button>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-info" href="gestion.php">Regresar <i class="fa fa-plus"></i> </a>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function eliminarProducto(productoID) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Esta acción no se puede deshacer',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'eliminar_producto.php?id=' + productoID;
                }
            });
        }
    </script>
           
</body>
</html>
