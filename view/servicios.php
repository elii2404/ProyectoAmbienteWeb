<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Servicios</title>
</head>
<style>
   @import 'https://fonts.googleapis.com/css?family=Montserrat:300, 400, 700&display=swap';



#services .services {
    flex-direction: column;
    text-align: center;
    max-width: 1500px;
    margin: 0 auto;
    padding: 100px 0;
}

#services .service-top {
    max-width: 500px;
    margin: 0 auto;
}

#services .service-bottom {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 50px;
}

#services .service-item {
    flex-basis: 80%;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
    padding: 30px;
    border-radius: 10px;
    background-size: cover;
    margin: 10px 5%;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

#services .service-item::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-image: linear-gradient(60deg, #D98880 0%, #485563 100%);
    opacity: 0.9;
    z-index: -1;
}

#services .service-bottom .icon {
    height: 80px;
    width: 80px;
    margin-bottom: 20px;
}

#services .service-item h2 {
    font-size: 2rem;
    color: #F0F3F4;
    margin-bottom: 10px;
    text-transform: uppercase;
    font-weight: bold; 
}

#services .service-item p {
    color: #17202A;
    text-align: left;
    font-weight: bold; 
}


@media only screen and (min-width: 768px) {
   
    #services .service-bottom .service-item {
        flex-basis: 45%;
        margin: 2.5%;
    }

    #services .service-bottom .service-item {
        flex-basis: 22%;
        margin: 1.5%;
    }
}
    </style>
<body>
<?php require_once ("./layout/nav.php"); ?>
<section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Nuestros  Serv<span>i</span>cios</h1>
        <p>Descubre la variedad de servicios que ofrecemos para deleitar tu paladar con helados irresistibles.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
        <h2>Helados Artesanales</h2>
          <p>Disfruta de nuestra selección de helados artesanales preparados con ingredientes frescos y de la más alta calidad.</p>
        <div class="icon"><img src="../assets/services.png" style="opacity: 0.8;" /></div>
        </div>
        <div class="service-item">
          <h2>Eventos Especiales</h2>
          <p>Haz tus eventos especiales aún más dulces con nuestro servicio de helados, perfecto para celebraciones memorables.</p>
          <div class="icon"><img src="../assets/services.png" /></div>
        </div>
        <div class="service-item">
          <h2>Creaciones Únicas</h2>
          <p>Descubre nuestras creaciones únicas de helados con sabores innovadores que te transportarán a nuevas experiencias.</p>
          <div class="icon"><img src="../assets/services.png" /></div>
        </div>
        <div class="service-item">
          <h2>Heladería Personalizada</h2>
          <p>Crea tu helado personalizado eligiendo tus sabores favoritos y complementos para una experiencia única.</p>
          <div class="icon"><img src="../assets/services.png" /></div>

        </div>
      </div>
    </div>
</section>
<?php require('./layout/footer.php') ?>
</body>
</html>