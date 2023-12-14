<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: linear-gradient(60deg, #0B5345 0%, #76D7C4 100%); 

        }

        .login-container {
            max-width: 400px;
            width: 100%;
        }

        .login-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-header h3 {
            margin-bottom: 10px;
        }

        .login-body {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .pos-r {
            position: relative;
        }

        .form-control {
            padding-right: 40px;
        }

        .fa {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body>

            <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
                <div class="login-content">
                    <div class="login-header">
                        <h3><strong>Iniciar Sesión</strong></h3>
                        <h5>Lorem ipsum dolor sit amet consectetur adipisic</h5>
                    </div>
                    
                        <form role="form" action="../controllers/login_usuario.php" method="POST" class="login-form">
                            <div class="form-group">
                                <div class="pos-r">
                                    <input id="form-username" type="text" name="usuarioCorreo" placeholder="Correo" class="form-username form-control">
                                    <i class="fa fa-user"></i>
                                    <span></span>
                                </div>
                            </div>
                   
                            <div class="form-group">
                                <div class="pos-r">
                                    <input id="form-password" type="password" name="usuarioContrasena" placeholder="Contraseña" class="form-password form-control">
                                    <i class="fa fa-lock"></i>
                                    <span></span>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success" value="Ingresar">
                        </form>

                    </div>
                    <hr>
                    <a class="btn btn-success" href="index.php">Regresar <i class="fa fa-plus"></i> </a>

                </div>

            </div>

        </div>

    </div>
    
</body>
</html>
