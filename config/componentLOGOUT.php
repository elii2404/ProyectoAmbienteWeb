<?php

function component($productname, $productquantity, $productdescription, $productprice, $productimg, $productid)
{
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"tiendaUSUARIO.php\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <img src=\"$productimg\" alt=\"Product Image\" class=\"img-fluid card-img-top\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$productname</h5>
                    <p class=\"card-text\">$productdescription</p>
                    <h6>Cantidad: $productquantity</h6>
                    <h5>
                        <span class=\"price\">$$productprice</span>
                    </h5>

                    
                    <input type='hidden' name='productoID' value='$productid'>
                </div>
            </div>
        </form>
    </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid)
{
    $element = "
    
    <form action=\"carrito.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
        <div class=\"border rounded\">
            <div class=\"row bg-white\">
                <div class=\"col-md-3 pl-0\">
                    <img src=$productimg alt=\"Product Image\" class=\"img-fluid\">
                </div>
                <div class=\"col-md-6\">
                    <h5 class=\"pt-2\">$productname</h5>
                    <h5 class=\"pt-2\">$$productprice</h5>
                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                </div>
                <div class=\"col-md-3 py-5\">
                    <div>
                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    ";
    echo $element;
}
?>








