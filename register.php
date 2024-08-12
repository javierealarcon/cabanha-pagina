<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
    <title>Registrarse | La Cordillera</title>
    <style>
        body{
            background-color: #8cb151;
            background: linear-gradient(to right, #234023, #8cb151);
        }
        .bg{
            background-image: url(img/img-bg-login.webp);
            background-position: center center;
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- inicia preloader de la página -->
    <div class="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    <!-- termina el preloader de la página -->
    <!--
    <form method="post">
        <h2>Hola</h2>
        <p>inicia tu registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo electrónico">
            
        </div>
    </form>
    -->

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row aling-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg5 col-xl-6 rounded">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/logo.png" alt="">
                </div>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                <!-- Login -->
                <form method="post">
                <div class="input-wrapper mb-4">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="text" placeholder="Ingrese su nombre">
                    </div>
                    <div class="input-wrapper mb-4">
                        <label for="name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="text" placeholder="Ingrese su apellido">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Confirme contraseña">
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="register">Registrarme</button>
                    </div>



                    <div class="my-3">
                        <span>¿Problemas al iniciar sesión? <a href="register.php">Registrate</a></span> <br>
                        <span><a href="#">Recuperar Contraseña</a></span>
                    </div>
                </form>
    
    <script src="js/preloader.js"></script>
</body>
</html>