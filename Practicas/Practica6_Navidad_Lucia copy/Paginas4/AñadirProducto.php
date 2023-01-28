<?php
session_start();
require('../Funciones/Funciones.php');
require('../Funciones/BD.php');
require('../Conexion/conexionBD.php');
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
    <title>AddProducto - Bootstrap</title>
</head>

<body>
    <header class="p-3" style="background-color: #f0f0f0;">
        <div class="mx-2">
            <div class="d-flex bd-highlight mb-1 align-items-center justify-content-space-between">
                <a href="../index.php" class="mx-auto mx-sm-auto ms-md-0 my-1" class="logo">
                    <img src="../Imagen/logo.png" alt="logo" class="icono_logo" style="width: 200px;">
                </a>
                <?php
                if (estaValidado()) {
                    echo '<div class="p-0 p-sm-0 p-md-2">';
                    echo '<a href="../Acciones/Carrito.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    Carrito</a>';
                    echo '</div>';
                    echo '<div class="p-0 p-sm-0 p-md-2">';
                    echo '<a href="../Paginas2/Perfil.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Perfil</a>';
                    echo '</div>';
                    echo '<div class="p-0 p-sm-0 p-md-2">';
                    echo '<a href="../Acciones/Logout.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    Cerrar Sesión</a>';
                    echo '</div>';
                }
                ?>
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
                        echo '<li class="opli nav-item p-3 p-md-0 fw-bold"><a href="../Paginas2/Perfil.php" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Perfil</a></li>';
                        echo '<li class="opli nav-item p-3 p-md-0 fw-bold"><a href="../Acciones/Logout.php" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Cerrar Sesión</a></li>';
                    }
                    ?>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../index.php">Inicio</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../Paginas2/Tienda.php">Tienda</a></li>
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
        $operacion = $_REQUEST['op'];
        if (enviado()) {
            if ($_REQUEST['op'] == 'editar') {
                if (validarProducto()) {
                    actualizarProducto();
                    header("Location: ../Paginas3/Almacen.php");
                    exit;
                }
            } elseif ($_REQUEST['op'] == 'nue') {
                if (validarProducto()) {
                    nuevoProducto();
                    header("Location: ../Paginas3/Almacen.php");
                    exit;
                }
            }
        } elseif ($operacion == 'edi') {
            $jamon = findByIdPRO($_REQUEST['id'], 'productos');
        }
        ?>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-9 col-sm-10">
                    <h1 class="text-center fw-bold pb-3" style="color: #444;">Almacén</h1>
                    <div class="card" style="background-color: #d4d4d4;border-style: none;">
                        <div class="card-title text-center">
                            <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Añadir producto</h2>
                        </div>
                        <div class="card-body pt-0">
                            <form action="./AñadirProducto.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="op" value="<? echo $operacion;
                                                                        ?>">
                                <?
                                if ($operacion == 'edi') {
                                    echo '<div class="mb-4 px-2">';
                                    echo '<label for="idProd" class="form-label">Código</label>';
                                    echo '<input type="text" class="form-control" name="id" id="idProd" aria-label="id" value="' . $_REQUEST['cod_producto'] . '" readonly>';
                                    echo '</div>';
                                }
                                ?>
                                <div class="mb-4 px-2">
                                    <label for="idNombre" class="form-label">Nombre </label>
                                    <input type="text" class="form-control" name="nombre" id="idNombre" value="<? if ($operacion == 'edi') {
                                                                                                                    echo $jamon[0]['nombre'];
                                                                                                                }
                                                                                                                ?>" <? if ($operacion == 'edi') {
                                                                                                                        echo ' readonly';
                                                                                                                    }
                                                                                                                    ?>>
                                    <?
                                    if (enviado() && $operacion == 'nue') {
                                        if (vacio("nombre")) {
                                    ?>
                                            <span style="color:brown"> Introduce nombre</span>
                                    <?
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="mb-4 px-2">
                                    <label for="idPrecio" class="form-label">Precio</label>
                                    <input type="number" step="0.01" class="form-control" name="precio" id="idPrecio" value="<? if ($operacion == 'edi') {
                                                                                                                                    echo $jamon[0]['precio'];
                                                                                                                                }
                                                                                                                                ?>">
                                    <?
                                    if (enviado() && $operacion == 'nue') {
                                        if (vacio("precio")) {
                                    ?>
                                            <span style="color:brown"> Introduce precio</span>
                                    <?
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="mb-4 px-2">
                                    <label for="idDescripcion" class="form-label">Descripcion</label>
                                    <textarea class="form-control" id="idDescripcion" rows="3" name="descripcion"><? if ($operacion == 'edi') {
                                                                                                                        echo $jamon[0]['descripcion'];
                                                                                                                    }
                                                                                                                    ?></textarea>
                                    <?
                                    if (enviado() && $operacion == 'nue') {
                                        if (vacio("descripcion")) {
                                    ?>
                                            <span style="color:brown"> Introduce descripcion</span>
                                    <?
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="mb-4 px-2">
                                    <label for="idStock" class="form-label">Stock</label>
                                    <input type="number" class="form-control" name="stock" id="idStock" value="<? if ($operacion == 'edi') {
                                                                                                                    echo $jamon[0]['stock'];
                                                                                                                }
                                                                                                                ?>" <?
                                                                                                                    if ($operacion == 'edi') {
                                                                                                                        echo ' readonly';
                                                                                                                    }
                                                                                                                    ?>>
                                    <?
                                    if (enviado() && $operacion == 'nue') {
                                        if (vacio("stock")) {
                                    ?>
                                            <span style="color:brown"> Introduce stock</span>
                                    <?
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="mb-4 px-2">
                                    <label for="url" class="form-label">Imagen</label>
                                    <input class="form-control" type="file" id="fichero" name="fichero" <?
                                                                                                        if ($operacion == 'edi') {
                                                                                                            echo ' disabled';
                                                                                                        }
                                                                                                        ?>>
                                    <?
                                    if (enviado() && $operacion == 'nue') {
                                        if (!file_exists($_FILES['fichero']['tmp_name'])) {
                                            echo '<div class="invalid-feedback">No existe esta imagen</div>';
                                        } elseif ($_FILES['fichero']['size'] == 0) {
                                            echo '<div class="invalid-feedback">Imagen vacía</div>';
                                        } elseif (!patFoto()) {
                                            echo '<div class="invalid-feedback">Extensión de archivo no soportada</div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Añadir" name="enviar" class="botonG">
                                    <a href="../Paginas3/Almacen.php" class="ps-3"> Volver</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container-fluid px-0 pt-1">
        <footer class="position-relative mt-3" style="background-color: #d4d4d4;">
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Cookies</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Privacidad</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>