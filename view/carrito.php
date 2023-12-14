<?php

session_start();

require_once("../config/CreateDb.php");
require_once("../config/component.php");

$db = new CreateDb("heladeria", "productos");

// Adding a product to the cart
if (isset($_POST['add'])) {
    $product_id = $_POST['productoID'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $product_in_cart = false;
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productoID'] == $product_id) {
            $product_in_cart = true;
            break;
        }
    }

    if (!$product_in_cart) {
        $item_array = array('productoID' => $product_id);
        array_push($_SESSION['cart'], $item_array);
        echo "<script>alert('Producto agregado')</script>";
        echo "<script>window.location = 'tiendaUSUARIO.php'</script>";
    } else {
        echo "<script>alert('El producto ya ha sido agregado')</script>";
        echo "<script>window.location = 'tienda.php'</script>";
    }
}

// Removing a product from the cart
if (isset($_POST['remove'])) {
    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["productoID"] == $product_id) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Producto ha sido eliminado...!')</script>";
                echo "<script>window.location = 'carrito.php'</script>";
            }
        }
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <?php
    require_once('./layout/navADMIN.php');
    ?>
<hr>
    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                <h6>Carrito de compras</h6>
                    <hr>

                    <?php

                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'productoID');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['productoID'] == $id) {
                                    cartElement($row['imagen'], $row['productoNombre'], $row['productoPrecio'], $row['productoID']);
                                    $total = $total + (float)$row['productoPrecio'];
                                }
                            }
                        }
                    } else {
                        echo "<h5>Cart is Empty</h5>";
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h6>Precio</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            } else {
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Cargos</h6>
                            <hr>
                            <h6>Total a pagar</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php
                                echo $total;
                                ?></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
