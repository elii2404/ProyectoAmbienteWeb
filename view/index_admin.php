<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../assets/body.css"> 
</head>
<body >
    <?php require('./layout/navADMIN.php') ?>
    <main>
        <hr>

        <div class="welcome-container">
            <div class="welcome-message">
                <p>Bienvenido a la Heladería. Descubre un mundo de sabores y sensaciones refrescantes.</p>
            </div>
            <div class="info-box">
                <h2>Nuestros Helados</h2>
                <p>Explora una amplia variedad de helados elaborados con pasión y ingredientes de la más alta calidad.</p>
            </div>
        </div>

        <hr>

        <div class="container-fluid padding" data-aos="fade-up">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-code"></i>
                    <h3>Sabores Únicos</h3>
                    <p>Sumérgete en la experiencia de sabores únicos que te ofrecemos. Cada helado es una obra maestra de sabor.</p>
                    <img src="../assets/cono2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <i class="fas fa-bold"></i>
                    <h3>Calidad Garantizada</h3>
                    <p>Nuestros helados se preparan con ingredientes frescos y de la más alta calidad. Garantizamos una experiencia deliciosa en cada bocado.</p>
                    <img src="../assets/cono2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-xs-12 col-md-4">
                    <i class="fab fa-css3"></i>
                    <h3>Variedad de Presentaciones</h3>
                    <p>Desde conos crujientes hasta copas elegantes, ofrecemos una amplia variedad de presentaciones para que disfrutes de nuestros helados como prefieras.</p>
                    <img src="../assets/cono2.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <hr>

<div class="card-group">
    <div class="card">
        <img src="../assets/cono1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Sabor Exquisito</h5>
            <p class="card-text">Déjate llevar por la explosión de sabores de nuestro helado de cono. Un placer irresistible en cada cucharada.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/helado1.png" class="card-img-top" alt="..." width="100">
        <div class="card-body">
            <h5 class="card-title">Textura Perfecta</h5>
            <p class="card-text">Nuestros helados se caracterizan por tener una textura suave y cremosa. Descubre la perfección en cada bocado.</p>
        </div>
    </div>
    <div class="card">
        <img src="../assets/helado2.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Variedad de Toppings</h5>
            <p class="card-text">Personaliza tu helado con una amplia selección de deliciosos toppings. Crea combinaciones únicas a tu gusto.</p>
        </div>
    </div>
</div>

<hr>
        
        <?php require('./layout/footer.php') ?>
    </main>
</body>
</html>

