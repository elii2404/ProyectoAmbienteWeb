<?php

session_start();

require_once('../config/CreateDb.php');
require_once('../config/componentLOGOUT.php');

$database = new CreateDb("heladeria", "productos");

if (isset($_POST['add'])) {
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "productoID");

        if (in_array($_POST['productoID'], $item_array_id)) {
            echo "<script>alert('El producto ya está en el carrito.')</script>";
            echo "<script>window.location = 'tienda.php'</script>";
        } else {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'productoID' => $_POST['productoID']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    } else {
        $item_array = array(
            'productoID' => $_POST['productoID']
        );

        $_SESSION['cart'][0] = $item_array;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php require_once ("./layout/nav.php"); ?>
<HR>

<h3 class="text-center ">INICIA SESION PARA AGREGAR AL CARRITO</H3>
<li class="text-center">
    <a class="btn btn-warning" href="login.php">Iniciar Sesión</a>
</li>

<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                  component($row['productoNombre'], $row['productoCantidad'], $row['productoDescripcion'], $row['productoPrecio'], $row['imagen'], $row['productoID']);
                }
            ?>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>