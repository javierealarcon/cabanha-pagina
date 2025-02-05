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
            background-color: #00a0fc;
            background: linear-gradient(to right, #003ffc, #00a0fc);
        }
        .bg{
            background-image: url(img/img-bg-register.jpg);
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

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row aling-items-stretch">
            
            <div class="col bg-white p-5 rounded">
                <a href="index.html">
                    <div class="aling-items-left">
                        <img src="img/logo.png" alt="">
                    </div>
                </a>
                <h2 class="fw-bold text-center py-5">Registrese</h2>
                <!-- Login -->
                <form method="post">
                <div class="input-wrapper mb-4">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre">
                    </div>
                    <div class="input-wrapper mb-4">
                        <label for="name" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Ingrese su apellido">
                    </div>
                    <div class="input-wrapper mb-4">
                        <label for="tel" class="form-label">Número de celular</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Ingrese su número de celular">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="btn-register">Registrarme</button>
                    </div>
                </form>
            </div>
            <div class="col bg d-none d-lg-block col-md-5 col-lg5 col-xl-6 rounded-end">
            </div>
        </div>
    </div>
    <script src="js/preloader.js"></script>
</body>
</html>

<?php
include("conection.php");
include("controller.php");
if (isset($POST['register'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['password']) >= 1 
    ) {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $date = date('dd/mm/yy');
        $consult = "INSERT INTO datos(name, lastname, phone, email, password, date)
            VALUES('$name', '$lastname', '$phone', '$email', '$password', '$date')";
        $result = mysqli_query($conenct, $consult);
        if ($result) {
            ?>
                <h3 class="success">Se ha registrado exitosamente</h3>
            <?php
        } else {
            ?>
                <h3 class="error">Ha ocurrido un error</h3>
            <?php
        }
    } else {
        ?>
            <h3 class="error">Rellene todos los campos</h3>
        <?php
    }
}
?>