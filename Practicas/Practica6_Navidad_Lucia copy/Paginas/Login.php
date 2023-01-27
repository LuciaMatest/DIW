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
    <title>Login - Bootstrap</title>
</head>

<body>
    <header class="p-3" style="background-color: #f0f0f0;">
        <div class="mx-2">
            <div class="d-flex bd-highlight mb-1 align-items-center justify-content-space-between">
                <a href="index.php" class="mx-auto mx-sm-auto ms-md-0 my-1" class="logo">
                    <img src="../Imagen/logo.png" alt="logo" class="icono_logo" style="width: 200px;">
                </a>

                <div class="p-2 p-sm-0">
                    <?php
                    // session_start();
                    // if (estaValidado()) {
                    //     echo '<a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    //     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    //         <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    //     </svg>
                    //     Carrito</a>';
                    //     echo '<a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    //     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    //         <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    //         <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    //     </svg>
                    //     Perfil</a>';
                    //     echo '<a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    //     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    //         <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    //         <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    //     </svg>
                    //     Cerrar Sesión</a>';
                    // } else {
                    ?>
                    <a href="#" type="button" class="boton px-1 d-none d-sm-none d-md-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                        Iniciar Sesión
                    </a>
                    <?php
                    // }
                    ?>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg" style="background-color: #d4d4d4;">
        <div class="container-fluid">
            <a class="navbar-brand"></a>
            <button class="btn default d-block d-sm-block d-md-flex d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <?php
                    // session_start();
                    // if (estaValidado()) {
                    //     echo '<li class="opli nav-item p-2 fw-bold"><a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">Carrito</a></li>';
                    //     echo '<li class="opli nav-item p-2 fw-bold"><a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">Perfil</a></li>';
                    //     echo '<li class="opli nav-item p-2 fw-bold"><a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">Cerrar Sesión</a></li>';
                    // } else {
                    ?>
                    <li class="opli nav-item fw-bold"><a href="#" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Iniciar Sesión</a></li>
                    <?php
                    // }
                    ?>
                    <li class="opli nav-item p-2 fw-bold"><a class="op btn nav-link" href="../index.php">Inicio</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op btn nav-link" href="Tienda.php">Tienda</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op btn nav-link" href="#">Contacto</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op btn nav-link" href="#">Ofertas</a></li>
                    <?php
                    // if (esAdmin() || esModerador()) {
                    //     echo '<li class="opli nav-item p-2 fw-bold"><a class="op btn nav-link" href="#">Almacén</a></li>';
                    //     echo '<li class="opli nav-item p-2 fw-bold"><a class="op btn nav-link" href="#">Albarán</a></li>';
                    //     echo '<li class="opli nav-item p-2 fw-bold"><a class="op btn nav-link" href="#">Ventas</a></li>';
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
                        <div class="card-title text-center">
                            <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Acceder</h2>
                        </div>
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
                                    <a href="Perfil.php" class="ps-3"> Crear cuenta</a>
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