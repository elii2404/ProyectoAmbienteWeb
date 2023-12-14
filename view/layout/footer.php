
<style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}

footer{
    width: 100%;
    background: #202020;
    color: white;   
    
}

.container-footer-all{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 40px;
}

.container-body{
    display: flex;
    justify-content: space-between;
}

.colum1{
    max-width: 400px;
}

.colum1 h1{
    font-size: 22px;
}

.colum1 p{
    font-size: 14px;
    color: #C7C7C7;
    margin-top: 20px;
}

.colum2{
    max-width: 400px;
    
}

.colum2 h1{
    font-size: 22px;
}

.row{
    margin-top: 20px;
    display: flex;
}

.row img{
    width: 36px;
    height: 36px;
}

.row label{
    margin-top: 10px;
    margin-left: 20px;
    color: #C7C7C7;
}

.colum3{
    max-width: 400px;
}

.colum3 h1{
    font-size: 22px;
}

.row2{
    margin-top: 20px;
    display: flex;
}

.row2 img{
    width: 36px;
    height: 36px;
}

.row2 label{
    margin-top: 10px;
    margin-left: 20px;
    max-width: 140px;
}

.container-footer{
    width: 100%;  
    background: #101010;
}

.footer{
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;  
    padding: 20px;
}

.copyright{
    color: #C7C7C7;
}

.copyright a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.information a{
    text-decoration: none;
    color: #C7C7C7;
}


@media screen and (max-width: 1100px){
    
    .container-body{
        flex-wrap: wrap;
    }
    
    .colum1{
        max-width: 100%;
    }
    
    .colum2,
    .colum3{
        margin-top: 40px;
    }
}
        </style>
<footer>      
       <div class="container-footer-all">  
            <div class="container-body">
                <div class="colum1">
                    <h1>Heladeria</h1>

                    <p>Descubre un mundo de sabores y sensaciones refrescantes.</p>
                </div>
                <div class="colum2">
    <h1>Redes Sociales</h1>
    <div class="row">
        <a href="https://www.facebook.com/TuPaginaDeFacebook" target="_blank">Siguenos en Facebook</a>
    </div>
    <div class="row">
        <a href="https://www.instagram.com/TuUsuarioDeInstagram" target="_blank">Siguenos en Instagram</a>
    </div>
</div>

                <div class="colum3">
                    <h1>Ubicacion</h1>
                    <div class="row2">
                       
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62885.49286903002!2d-84.0897665
                        5136718!3d9.905338599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e1ca6e0db3c9%3A0xcf369de3a702857e!2sHelader%C3%ADa%20El%20Melo!5e0!3m2!1ses-419!2scr!4v1702240993094!5m2!1ses-419!2scr" 
                        width="300" height="150" style="border:0;" 
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row2">
                     
                        <label>+506 6574-7434</label>
                    </div>
                    <div class="row2">
                      
                         <label>heladeria@gmail.com</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2023 Todos los Derechos Reservados | 
                    </div>
                </div>
            </div>
    </footer>