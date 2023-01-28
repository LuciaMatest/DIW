<?php
session_start();
require('../Funciones/Funciones.php');
require('../Conexion/BBDD.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Imagen/logo_1.ico" type="image/x-icon">
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
                <a href="../index.php" class="mx-auto mx-sm-auto ms-md-0 my-1" class="logo">
                    <img src="../Imagen/logo.png" alt="logo" class="icono_logo" style="width: 200px;">
                </a>
                <div class="p-0 p-sm-0 p-md-2">
                    <a href="../Acciones/Carrito.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        Carrito
                    </a>
                </div>
                <div class="p-0 p-sm-0 p-md-2">
                    <a href="../Acciones/Logout.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                        Cerrar Sesión
                    </a>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg p-0" style="background-color: #d4d4d4;">
        <div class="container-fluid p-0">
            <a class="navbar-brand"></a>
            <button class="btn default d-block d-sm-block d-md-flex d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <?php
                    if (estaValidado()) {
                        echo '<li class="opli nav-item p-3 p-md-0 fw-bold"><a href="../Acciones/Carrito.php" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Carrito</a></li>';
                        echo '<li class="opli nav-item p-3 p-md-0 fw-bold"><a href="../Acciones/Logout.php" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Cerrar Sesión</a></li>';
                    }
                    ?>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../index.php">Inicio</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="Tienda.php">Tienda</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="#">Contacto</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="#">Ofertas</a></li>
                    <?php
                    if (esAdmin() || esModerador()) {
                        echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../Paginas3/Almacen.php">Almacén</a></li>';
                        echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../Paginas3/Albaran.php">Albarán</a></li>';
                        echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../Paginas3/Ventas.php">Ventas</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <main class="pt-1">
        <?php
        if (guardarCambios()) {
            actualizarUsuario();
            session_destroy();
            validarUser($_REQUEST['user'], $_REQUEST['contraseña']);
            echo "<h2>Perfil actualizado!</h2>";
            echo "<a href='../index.php' class='botones'>Volver a inicio</a>";
        } else {
        ?>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-5 col-md-9 col-sm-10">
                        <h1 class="text-center fw-bold pb-3" style="color: #444;">Mi perfil</h1>
                        <div class="card" style="background-color: #d4d4d4;border-style: none;">
                            <div class="card-body pt-4">
                                <form action="./Perfil.php" method="post">
                                    <div class="mb-4 px-2">
                                        <label for="idUser" class="form-label">Usuario:</label>
                                        <input type="text" class="form-control" name="user" id="user" readonly value="<?php echo $_SESSION["user"]; ?>">
                                        <?
                                        if (enviado()) {
                                            if (vacio("user")) {
                                        ?>
                                                <span style="color:brown"> Introduce usuario</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="idNombre" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" id="idNombre" value="<?php echo $_SESSION["nombre"]; ?>">
                                        <?
                                        if (enviado()) {
                                            if (vacio("nombre")) {
                                        ?>
                                                <span style="color:brown"> Introduce nombre</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="idContraseña" class="form-label">Contraseña:</label>
                                        <input type="password" class="form-control" name="contraseña" id="contraseña" value="<?php echo $_SESSION["contraseña"]; ?>">
                                        <?
                                        if (enviado()) {
                                            if (vacio("contraseña")) {
                                        ?>
                                                <span style="color:brown"> Introduce contraseña</span>
                                            <?
                                            } elseif (!patronContraseña()) {
                                            ?>
                                                <span style="color:brown"> Contraseña no válida, revise</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="idEmail" class="form-label">Email:</label>
                                        <input type="email" class="form-control" name="email" id="idEmail" value="<?php echo $_SESSION["email"]; ?>">
                                        <?
                                        if (enviado()) {
                                            if (vacio("email")) {
                                        ?>
                                                <span style="color:brown"> Introduce email</span>
                                            <?
                                            } elseif (!patronEmail()) {
                                            ?>
                                                <span style="color:brown"> Email no válida, revise</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="idFecha" class="form-label">Fecha de nacimiento:</label>
                                        <input type="text" class="form-control" name="fecha" id="fecha" placeholder="dd/mm/aaaa" value="<?php echo $_SESSION["fecha"]; ?>">
                                        <?
                                        if (enviado()) {
                                            if (vacio("fecha")) {
                                        ?>
                                                <span style="color:brown"> Introduce fecha</span>
                                            <?
                                            } elseif (!patronFecha()) {
                                            ?>
                                                <span style="color:brown"> Fecha no válida, revise</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="idOpcion">Rol:</label>
                                        <select name="rol" id="idOpcion" class="w-100 d-inline-block bg-white" style="box-sizing: border-box;border-radius: 4px;border: 1px solid #ccc;padding: 12px 20px;margin: 8px 0;">
                                            <option value="0">Seleccione una opción</option>
                                            <option value="ADM01">Administrador</option>
                                            <option value="M0001">Moderador</option>
                                            <option value="U0001">Usuario normal</option>
                                        </select>
                                        <?php
                                        if (existe('rol') && $_REQUEST['rol'] == 0) {
                                        ?>
                                            <span style="color:brown"> Introduce un rol</span>
                                        <?
                                        }
                                        ?>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Guardar cambios" name="enviar" class="botonG">
                                        <a href="../index.php" class="ps-3"> Volver</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </main>

    <div class="container-fluid px-0 pt-1">
        <footer class="position-relative mt-3" style="background-color: #d4d4d4;">
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Cookies</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Privacidad</a></li>
            </ul>
        </footer>
    </div>
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
    }
    unset($_SESSION['error']);
    ?>
</body>

</html>