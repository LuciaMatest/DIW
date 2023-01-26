<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Perfil - Bootstrap</title>
</head>

<body>
    <header class="p-3" style="background-color: #f0f0f0;">
        <div class="mx-2">
            <div class="d-flex bd-highlight mb-1 align-items-center justify-content-space-between">
                <a href="index.php" class="mx-auto mx-sm-auto ms-md-0 my-1" class="logo">
                    <img src="../Imagen/logo.png" alt="logo" class="icono_logo" style="width: 200px;">
                </a>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg" style="background-color: #d4d4d4;">
        <div class="container-fluid">
            <a class="navbar-brand"></a>
            <button class="btn default d-block d-sm-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="../index.php">Inicio</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="Tienda.php">Tienda</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="#">Contacto</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="#">Ofertas</a></li>
                    <?php
                    // if (esAdmin() || esModerador()) {
                    //     echo '<li class="nav-item p-2 fw-bold"><a class="nav-link" href="#">Almacén</a></li>';
                    //     echo '<li class="nav-item p-2 fw-bold"><a class="nav-link" href="#">Albarán</a></li>';
                    //     echo '<li class="nav-item p-2 fw-bold"><a class="nav-link" href="#">Ventas</a></li>';
                    // }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="pt-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-9 col-sm-10">
                    <h1 class="text-center fw-bold pb-3" style="color: #444;">Mi cuenta</h1>
                    <div class="card" style="background-color: #d4d4d4;border-style: none;">
                        <div class="card-body pt-0">
                            <form>
                                <div class="mb-4 px-2">
                                    <label for="username" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="username" />
                                </div>
                                <div class="mb-4 px-2">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" />
                                </div>
                                <!-- <div class="mb-4">
                                    <input type="checkbox" class="form-check-input" id="remember" />
                                    <label for="remember" class="form-label">Remember Me</label>
                                </div> -->
                                <div class="text-center">
                                    <input type="submit" value="Acceder" name="enviar" class="botonG">
                                    <a href="#" class="ps-3"> Crear cuenta</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="fixed-bottom" style="background-color: #d4d4d4;">
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Cookies</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Privacidad</a></li>
            </ul>
        </footer>
    </div>
    <?php
    // if (isset($_SESSION['error'])) {
    //     echo $_SESSION['error'];
    // }
    // unset($_SESSION['error']);
    ?>
</body>

</html>