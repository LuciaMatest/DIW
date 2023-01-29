<?php
session_start();
require('../Funciones/funcionesBD.php');
require('../Funciones/BD.php');
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
    <title>modificar</title>
</head>

<body>
    <header class="p-3" style="background-color: #f0f0f0;">
        <div class="mx-2">
            <div class="d-flex bd-highlight mb-1 align-items-center justify-content-space-between">
                <a href="../index.php" class="mx-auto mx-sm-auto ms-md-0 my-1" class="logo">
                    <img src="../imagen/logo.png" alt="logo" class="icono_logo" style="width: 200px;">
                </a>
                <?php

                if (estaValidado()) {
                    echo '<div class="p-0 p-sm-0 p-md-2">';
                    echo '<a href="../Paginas/carrito.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    Carrito</a>';
                    echo '</div>';
                    echo '<div class="p-0 p-sm-0 p-md-2">';
                    echo '<a href="../Paginas/perfil.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    Perfil</a>';
                    echo '</div>';
                    echo '<div class="p-0 p-sm-0 p-md-2">';
                    echo '<a href="../Paginas/logout.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    Cerrar Sesión</a>';
                    echo '</div>';
                } else {
                ?>
                    <div class="p-0 p-sm-0 p-md-2">
                        <a href="login.php" type="button" class="boton px-1 d-none d-sm-none d-md-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                            Iniciar Sesión
                        </a>
                    </div>
                <?php
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
                        echo '<li class="opli nav-item p-3 p-md-0 fw-bold"><a href="carrito.php" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Carrito</a></li>';
                        echo '<li class="opli nav-item p-3 p-md-0 fw-bold"><a href="perfil.php" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Perfil</a></li>';
                        echo '<li class="opli nav-item p-3 p-md-0 fw-bold"><a href="logout.php" type="button" class="btn boton px-1 d-block d-sm-block d-md-none">Cerrar Sesión</a></li>';
                    }
                    ?>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../index.php">Inicio</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="tienda.php">Tienda</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="#">Contacto</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="#">Ofertas</a></li>
                    <?php
                    if (esAdmin() || esModerador()) {
                        echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../PgAdmin/almacen.php">Almacén</a></li>';
                        echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../PgAdmin/albaran.php">Albarán</a></li>';
                        echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../PgAdmin/ventas.php">Ventas</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="pt-5">
        <?php
        $opcion = $_REQUEST['opcion'];

        //Eliminar
        if ($opcion == 'elimina_venta') {
            $clave = $_REQUEST['clave'];
            try {
                $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
                $elimina = "delete from ventas where id_ventas='" . $_REQUEST['clave'] . "';";
                $conexion->exec($elimina);
            } catch (Exception $ex) {
                if ($ex->getCode() == 2002) {
                    echo '<span style="color:brown"> Fallo de conexión </span>';
                }
                if ($ex->getCode() == 1049) {
                    echo '<span style="color:brown"> Base de datos desconocida </span>';
                }
                if ($ex->getCode() == 1045) {
                    echo '<span style="color:brown"> Datos incorrectos </span>';
                }
            } finally {
                unset($conexion);
            }

            header("Location: ../PgAdmin/ventas.php");
        }
        if ($opcion == 'elimina_albaran') {
            $clave = $_REQUEST['clave'];
            try {
                $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
                $elimina = "delete from albaran where id_albaran='" . $_REQUEST['clave'] . "';";
                $conexion->exec($elimina);
            } catch (Exception $ex) {
                if ($ex->getCode() == 2002) {
                    echo '<span style="color:brown"> Fallo de conexión </span>';
                }
                if ($ex->getCode() == 1049) {
                    echo '<span style="color:brown"> Base de datos desconocida </span>';
                }
                if ($ex->getCode() == 1045) {
                    echo '<span style="color:brown"> Datos incorrectos </span>';
                }
            } finally {
                unset($conexion);
            }

            header("Location: ../PgAdmin/almacen.php");
        }
        if (enviado()) {
            //Modificar
            if ($opcion == 'modifica_ventas') {
                $clave = $_REQUEST['clave'];
                try {
                    $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
                    $actualiza = "update ventas set id_ventas='" . $_REQUEST['id_ventas'] . "',usuario_ventas='" . $_REQUEST['usuario_ventas'] . "',fecha_compra='" . $_REQUEST['fecha_compra'] . "',cod_producto='" . $_REQUEST['cod_producto'] . "',cantidad='" . $_REQUEST['cantidad'] . "',precio_total='" . $_REQUEST['precio_total'] . "' where id_ventas='" . $_REQUEST['clave'] . "';";
                    $conexion->exec($actualiza);
                } catch (Exception $ex) {
                    if ($ex->getCode() == 2002) {
                        echo '<span style="color:brown"> Fallo de conexión </span>';
                    }
                    if ($ex->getCode() == 1049) {
                        echo '<span style="color:brown"> Base de datos desconocida </span>';
                    }
                    if ($ex->getCode() == 1045) {
                        echo '<span style="color:brown"> Datos incorrectos </span>';
                    }
                } finally {
                    unset($conexion);
                }
                header("Location: ../PgAdmin/ventas.php");
            }
            if ($opcion == 'modifica_albaran') {
                $clave = $_REQUEST['clave'];
                try {
                    $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
                    $actualiza = "update albaran set id_albaran='" . $_REQUEST['id_albaran'] . "',fecha_albaran='" . $_REQUEST['fecha_albaran'] . "',cod_producto='" . $_REQUEST['cod_producto'] . "',cantidad='" . $_REQUEST['cantidad'] . "',usuario_albaran='" . $_REQUEST['usuario_albaran'] . "' where id_albaran='" . $_REQUEST['clave'] . "';";
                    $conexion->exec($actualiza);
                } catch (Exception $ex) {
                    if ($ex->getCode() == 2002) {
                        echo '<span style="color:brown"> Fallo de conexión </span>';
                    }
                    if ($ex->getCode() == 1049) {
                        echo '<span style="color:brown"> Base de datos desconocida </span>';
                    }
                    if ($ex->getCode() == 1045) {
                        echo '<span style="color:brown"> Datos incorrectos </span>';
                    }
                } finally {
                    unset($conexion);
                }
                header("Location: ../PgAdmin/almacen.php");
            }
            if ($opcion == 'modifica_productos') {
                $clave = $_REQUEST['clave'];
                try {
                    $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
                    $actualiza = "update productos set cod_producto='" . $_REQUEST['cod_producto'] . "',nombre='" . $_REQUEST['nombre'] . "',descripcion='" . $_REQUEST['descripcion'] . "',precio='" . $_REQUEST['precio'] . "',stock='" . $_REQUEST['stock'] . "' where cod_producto='" . $_REQUEST['clave'] . "';";
                    $conexion->exec($actualiza);
                } catch (Exception $ex) {
                    if ($ex->getCode() == 2002) {
                        echo '<span style="color:brown"> Fallo de conexión </span>';
                    }
                    if ($ex->getCode() == 1049) {
                        echo '<span style="color:brown"> Base de datos desconocida </span>';
                    }
                    if ($ex->getCode() == 1045) {
                        echo '<span style="color:brown"> Datos incorrectos </span>';
                    }
                } finally {
                    unset($conexion);
                }
                header("Location: ../PgAdmin/almacen.php");
            }
            if ($opcion == 'añadir_productos') {
                try {
                    $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
                    $inserta = "insert into productos (cod_producto, nombre, descripcion, precio, stock) values (?,?,?,?,?)";
                    $sql_preparada = $conexion->prepare($inserta);
                    $array = array($_REQUEST['cod_producto'], $_REQUEST['nombre'], $_REQUEST['descripcion'], (int)$_REQUEST['precio'], (int)$_REQUEST['stock']);
                    $sql_preparada->execute($array);
                } catch (Exception $ex) {
                    if ($ex->getCode() == 2002) {
                        echo '<span style="color:brown"> Fallo de conexión </span>';
                    }
                    if ($ex->getCode() == 1049) {
                        echo '<span style="color:brown"> Base de datos desconocida </span>';
                    }
                    if ($ex->getCode() == 1045) {
                        echo '<span style="color:brown"> Datos incorrectos </span>';
                    }
                } finally {
                    unset($conexion);
                }
                header("Location: ../PgAdmin/almacen.php");
            }
        }
        ?>
        <?
        //Mostraremos la informacion que queremos modificar dependiendo de que 'boton' seleccionemos
        try {
            $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
            if ($opcion == 'modifica_ventas') {
                $clave = $_REQUEST['clave'];
                //Seleccionamos todos los datos de una de la opciones que tenemos en la lista
                $sql = "select * from ventas where id_ventas='" . $_REQUEST['clave'] . "';";
                $resultado = $conexion->query($sql);
                //Recorremos la tabla
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    $id_ventas = $row['id_ventas'];
                    $usuario_ventas = $row['usuario_ventas'];
                    $fecha_compra = $row['fecha_compra'];
                    $cod_producto = $row['cod_producto'];
                    $cantidad = $row['cantidad'];
                    $precio_total = $row['precio_total'];
                }
            }
            if ($opcion == 'modifica_albaran') {
                $clave = $_REQUEST['clave'];
                //Seleccionamos todos los datos de una de la opciones que tenemos en la lista
                $sql = "select * from albaran where id_albaran='" . $_REQUEST['clave'] . "';";
                $resultado = $conexion->query($sql);
                //Recorremos la tabla
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    $id_albaran = $row['id_albaran'];
                    $fecha_albaran = $row['fecha_albaran'];
                    $cod_producto = $row['cod_producto'];
                    $cantidad = $row['cantidad'];
                    $usuario_albaran = $row['usuario_albaran'];
                }
            }
            if ($opcion == 'modifica_productos') {
                $clave = $_REQUEST['clave'];
                //Seleccionamos todos los datos de una de la opciones que tenemos en la lista
                $sql = "select * from productos where cod_producto='" . $_REQUEST['clave'] . "';";
                $resultado = $conexion->query($sql);
                //Recorremos la tabla
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    $cod_producto = $row['cod_producto'];
                    $nombre = $row['nombre'];
                    $descripcion = $row['descripcion'];
                    $precio = $row['precio'];
                    $stock = $row['stock'];
                }
            }
        } catch (Exception $ex) {
            if ($ex->getCode() == 2002) {
                echo '<span style="color:brown"> Fallo de conexión </span>';
            }
            if ($ex->getCode() == 1049) {
                echo '<span style="color:brown"> Base de datos desconocida </span>';
            }
            if ($ex->getCode() == 1045) {
                echo '<span style="color:brown"> Datos incorrectos </span>';
            }
        } finally {
            unset($conexion);
        }

        if ($opcion == 'modifica_ventas') {
        ?>
            <div class="container mod_ventas">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-5 col-md-9 col-sm-10">
                        <div class="card" style="background-color: #d4d4d4;border-style: none;">
                            <div class="card-title text-center">
                                <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Modificar ventas</h2>
                            </div>
                            <div class="card-body pt-0">
                                <!-- Formulario -->
                                <form action="./modificarBD.php" method="post">
                                    <input type="hidden" name="opcion" value="<?
                                                                                echo $opcion;
                                                                                ?>">
                                    <input type="hidden" name="clave" value="<?
                                                                                if ($opcion == 'modifica_ventas') {
                                                                                    echo $clave;
                                                                                }
                                                                                ?>">
                                    <div class="mb-4 px-2">
                                        <label for="id_ventas" class="form-label">ID:</label>
                                        <input type="text" class="form-control" name="id_ventas" id="id_ventas" placeholder="id_ventas" readonly value="<?
                                                                                                                                                        if ($opcion == 'modifica_ventas') {
                                                                                                                                                            echo $id_ventas;
                                                                                                                                                        }
                                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("id_ventas")) {
                                        ?>
                                                <span style="color:brown"> Introduce id</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="usuario_ventas" class="form-label">Usuario:</label>
                                        <input type="text" class="form-control" name="usuario_ventas" id="usuario_ventas" placeholder="usuario_ventas" readonly value="<?
                                                                                                                                                                        if ($opcion == 'modifica_ventas') {
                                                                                                                                                                            echo $usuario_ventas;
                                                                                                                                                                        }
                                                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("usuario_ventas")) {
                                        ?>
                                                <span style="color:brown"> Introduce usuario</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="fecha_compra" class="form-label">Fecha:</label>
                                        <input type="text" class="form-control" name="fecha_compra" id="fecha_compra" placeholder="aaaa-mm-dd" value="<?
                                                                                                                                                        if ($opcion == 'modifica_ventas') {
                                                                                                                                                            echo $fecha_compra;
                                                                                                                                                        }
                                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("fecha")) {
                                        ?>
                                                <span style="color:brown"> Introduce fecha</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="cod_producto" class="form-label">Codigo producto:</label>
                                        <input type="number" class="form-control" name="cod_producto" id="cod_producto" placeholder="cod_producto" readonly value="<?
                                                                                                                                                                    if ($opcion == 'modifica_ventas') {
                                                                                                                                                                        echo $cod_producto;
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("cod_producto")) {
                                        ?>
                                                <span style="color:brown"> Introduce código</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="cantidad" class="form-label">Cantidad:</label>
                                        <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="cantidad" value="<?
                                                                                                                                                if ($opcion == 'modifica_ventas') {
                                                                                                                                                    echo $cantidad;
                                                                                                                                                }
                                                                                                                                                ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("cantidad")) {
                                        ?>
                                                <span style="color:brown"> Introduce cantidad</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="precio_total" class="form-label">Precio total:</label>
                                        <input type="number" class="form-control" name="precio_total" id="precio_total" placeholder="precio_total" value="<?
                                                                                                                                                            if ($opcion == 'modifica_ventas') {
                                                                                                                                                                echo $precio_total;
                                                                                                                                                            }
                                                                                                                                                            ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("precio_total")) {
                                        ?>
                                                <span style="color:brown"> Introduce precio</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Modificar_ventas" name="enviar" class="boton">
                                        <a href="../PgAdmin/ventas.php" class="ps-3">Volver</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?
        } elseif ($opcion == 'modifica_albaran') {
        ?>
            <div class="container mod_albaran">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-5 col-md-9 col-sm-10">
                        <div class="card" style="background-color: #d4d4d4;border-style: none;">
                            <div class="card-title text-center">
                                <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Modificar albaran</h2>
                            </div>
                            <div class="card-body pt-0">
                                <!-- Formulario -->
                                <form action="./modificarBD.php" method="post">
                                    <input type="hidden" name="opcion" value="<?
                                                                                echo $opcion;
                                                                                ?>">
                                    <input type="hidden" name="clave" value="<?
                                                                                if ($opcion == 'modifica_albaran') {
                                                                                    echo $clave;
                                                                                }
                                                                                ?>">
                                    <div class="mb-4 px-2">
                                        <label for="id_albaran" class="form-label">ID:</label>
                                        <input type="text" class="form-control" name="id_albaran" id="id_albaran" placeholder="id_albaran" readonly value="<?
                                                                                                                                                            if ($opcion == 'modifica_albaran') {
                                                                                                                                                                echo $id_albaran;
                                                                                                                                                            }
                                                                                                                                                            ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("id_albaran")) {
                                        ?>
                                                <span style="color:brown"> Introduce id</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="fecha_albaran" class="form-label">Fecha:</label>
                                        <input type="text" class="form-control" name="fecha_albaran" id="fecha_albaran" placeholder="aaaa-mm-dd" value="<?
                                                                                                                                                        if ($opcion == 'modifica_albaran') {
                                                                                                                                                            echo $fecha_albaran;
                                                                                                                                                        }
                                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("fecha_albaran")) {
                                        ?>
                                                <span style="color:brown"> Introduce fecha</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="cod_producto" class="form-label">Codigo producto:</label>
                                        <input type="number" class="form-control" name="cod_producto" id="cod_producto" placeholder="cod_producto" readonly value="<?
                                                                                                                                                                    if ($opcion == 'modifica_albaran') {
                                                                                                                                                                        echo $cod_producto;
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("cod_producto")) {
                                        ?>
                                                <span style="color:brown"> Introduce código</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="cantidad" class="form-label">Cantidad:</label>
                                        <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="cantidad" value="<?
                                                                                                                                                if ($opcion == 'modifica_albaran') {
                                                                                                                                                    echo $cantidad;
                                                                                                                                                }
                                                                                                                                                ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("cantidad")) {
                                        ?>
                                                <span style="color:brown"> Introduce cantidad</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="usuario_albaran" class="form-label">Usuario:</label>
                                        <input type="text" class="form-control" name="usuario_albaran" id="usuario_albaran" placeholder="usuario_albaran" readonly value="<?
                                                                                                                                                                            if ($opcion == 'modifica_albaran') {
                                                                                                                                                                                echo $usuario_albaran;
                                                                                                                                                                            }
                                                                                                                                                                            ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("usuario_albaran")) {
                                        ?>
                                                <span style="color:brown"> Introduce usuario</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Modificar_albarán" name="enviar" class="boton">
                                        <a href="../PgAdmin/almacen.php" class="ps-3">Volver</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?
        } elseif ($opcion == 'modifica_productos') {
        ?>
            <div class="container mod_productos">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-5 col-md-9 col-sm-10">
                        <div class="card" style="background-color: #d4d4d4;border-style: none;">
                            <div class="card-title text-center">
                                <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Modificar producto</h2>
                            </div>
                            <div class="card-body pt-0">
                                <!-- Formulario -->
                                <form action="./modificarBD.php" method="post">
                                    <input type="hidden" name="opcion" value="<?
                                                                                echo $opcion;
                                                                                ?>">
                                    <input type="hidden" name="clave" value="<?
                                                                                if ($opcion == 'modifica_productos') {
                                                                                    echo $clave;
                                                                                }
                                                                                ?>">
                                    <div class="mb-4 px-2">
                                        <label for="cod_producto" class="form-label">ID:</label>
                                        <input type="text" class="form-control" name="cod_producto" id="cod_producto" placeholder="cod_producto" readonly value="<?
                                                                                                                                                                    if ($opcion == 'modifica_productos') {
                                                                                                                                                                        echo $cod_producto;
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("cod_producto")) {
                                        ?>
                                                <span style="color:brown"> Introduce id</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="nombre" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" readonly value="<?
                                                                                                                                                if ($opcion == 'modifica_productos') {
                                                                                                                                                    echo $nombre;
                                                                                                                                                }
                                                                                                                                                ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
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
                                        <label for="descripcion" class="form-label">Descripcion:</label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" value="<?
                                                                                                                                                        if ($opcion == 'modifica_productos') {
                                                                                                                                                            echo $descripcion;
                                                                                                                                                        }
                                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("descripcion")) {
                                        ?>
                                                <span style="color:brown"> Introduce descripcion</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="precio" class="form-label">Precio:</label>
                                        <input type="number" class="form-control" name="precio" id="precio" placeholder="precio" value="<?
                                                                                                                                        if ($opcion == 'modifica_productos') {
                                                                                                                                            echo $precio;
                                                                                                                                        }
                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("precio")) {
                                        ?>
                                                <span style="color:brown"> Introduce precio</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="stock" class="form-label">Stock:</label>
                                        <input type="number" class="form-control" name="stock" id="stock" placeholder="stock" readonly value="<?
                                                                                                                                                if ($opcion == 'modifica_productos') {
                                                                                                                                                    echo $stock;
                                                                                                                                                }
                                                                                                                                                ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("stock")) {
                                        ?>
                                                <span style="color:brown"> Introduce stock</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Modificar producto" name="enviar" class="botonG">
                                        <a href="../PgAdmin/almacen.php" class="ps-3">Volver</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?
        } elseif ($opcion == 'añadir_productos') {
        ?>
            <div class="container aña_productos">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-5 col-md-9 col-sm-10">
                        <div class="card" style="background-color: #d4d4d4;border-style: none;">
                            <div class="card-title text-center">
                                <h2 class="px-3 pt-4 fw-bold" style="color: #555;">Añadir producto</h2>
                            </div>
                            <div class="card-body pt-0">
                                <!-- Formulario -->
                                <form action="./modificarBD.php" method="post">
                                    <div class="mb-4 px-2">
                                        <label for="cod_producto" class="form-label">ID:</label>
                                        <input type="text" class="form-control" name="cod_producto" id="cod_producto" placeholder="cod_producto" value="<?
                                                                                                                                                        //Mantener el texto introducido en el campo de texto 
                                                                                                                                                        if (enviado() && !vacio("cod_producto")) {
                                                                                                                                                            echo $_REQUEST["cod_producto"];
                                                                                                                                                        }
                                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("cod_producto")) {
                                        ?>
                                                <span style="color:brown"> Introduce id</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="nombre" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" value="<?
                                                                                                                                        //Mantener el texto introducido en el campo de texto 
                                                                                                                                        if (enviado() && !vacio("nombre")) {
                                                                                                                                            echo $_REQUEST["nombre"];
                                                                                                                                        }
                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
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
                                        <label for="descripcion" class="form-label">Descripcion:</label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" value="<?
                                                                                                                                                        //Mantener el texto introducido en el campo de texto 
                                                                                                                                                        if (enviado() && !vacio("descripcion")) {
                                                                                                                                                            echo $_REQUEST["descripcion"];
                                                                                                                                                        }
                                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("descripcion")) {
                                        ?>
                                                <span style="color:brown"> Introduce descripcion</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2" p>
                                        <label for="precio" class="form-label">Precio:</label>
                                        <input type="number" class="form-control" name="precio" id="precio" placeholder="precio" value="<?
                                                                                                                                        //Mantener el texto introducido en el campo de texto 
                                                                                                                                        if (enviado() && !vacio("precio")) {
                                                                                                                                            echo $_REQUEST["precio"];
                                                                                                                                        }
                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("precio")) {
                                        ?>
                                                <span style="color:brown"> Introduce precio</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="mb-4 px-2">
                                        <label for="stock" class="form-label">Stock:</label>
                                        <input type="number" class="form-control" name="stock" id="stock" placeholder="stock" value="<?
                                                                                                                                        //Mantener el texto introducido en el campo de texto 
                                                                                                                                        if (enviado() && !vacio("stock")) {
                                                                                                                                            echo $_REQUEST["stock"];
                                                                                                                                        }
                                                                                                                                        ?>">
                                        <?
                                        //comprobar que no este vacio y valido, si lo está pongo un error
                                        if (enviado()) {
                                            if (vacio("stock")) {
                                        ?>
                                                <span style="color:brown"> Introduce stock</span>
                                        <?
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Añadir" name="enviar" class="botonG">
                                        <a href="../PgAdmin/almacen.php" class="ps-3">Volver</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?
        }
        ?>
        <?
        if (enviado()) {
            if ($opcion == 'añadir_stock') {
                añadirStock();
                header("Location: ../PgAdmin/albaran.php");
            }
        }
        ?>
    </main>
    <div class="container">
        <footer class="position-relative mt-3" style="background-color: #d4d4d4;">
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Cookies</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Privacidad</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>