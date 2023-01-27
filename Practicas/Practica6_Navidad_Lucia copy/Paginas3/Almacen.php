<?php
// require('../Funciones/funcionesBD.php');
// require('../Funciones/BD.php');
// require('../Conexion/conexionBD.php');
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
    <title>Almacen - Bootstrap</title>
</head>

<body>
    <header class="p-3" style="background-color: #f0f0f0;">
        <div class="mx-2">
            <div class="d-flex bd-highlight mb-1 align-items-center justify-content-space-between">
                <a href="../index.php" class="mx-auto mx-sm-auto ms-md-0 my-1" class="logo">
                    <img src="../Imagen/logo.png" alt="logo" class="icono_logo" style="width: 200px;">
                </a>
                <?php
                // if (estaValidado()) {
                //     echo '<div class="p-0 p-sm-0 p-md-2">';
                //     echo '<a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                //     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                //         <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                //     </svg>
                //     Carrito</a>';
                //     echo '</div>';
                //     echo '<div class="p-0 p-sm-0 p-md-2">';
                //     echo '<a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                //     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                //         <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                //         <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                //     </svg>
                //     Perfil</a>';
                //     echo '</div>';
                //     echo '<div class="p-0 p-sm-0 p-md-2">';
                //     echo '<a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">
                //     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                //         <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                //         <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                //     </svg>
                //     Cerrar Sesión</a>';
                //     echo '</div>';
                // } 
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
                    // if (estaValidado()) {
                    //     echo '<li class="opli nav-item p-3 fw-bold"><a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">Carrito</a></li>';
                    //     echo '<li class="opli nav-item p-3 fw-bold"><a href="../Paginas2/Perfil.php" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">Perfil</a></li>';
                    //     echo '<li class="opli nav-item p-3 fw-bold"><a href="#" type="button" class="btn boton px-1 d-none d-sm-none d-md-block">Cerrar Sesión</a></li>';
                    // }
                    ?>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../index.php">Inicio</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="../Paginas2/Tienda.php">Tienda</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="#">Contacto</a></li>
                    <li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="#">Ofertas</a></li>
                    <?php
                    // if (esAdmin() || esModerador()) {
                        //     echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="./Albaran.php">Albarán</a></li>';
                        //     echo '<li class="opli nav-item p-3 fw-bold"><a class="op btn nav-link" href="./Ventas.php">Ventas</a></li>';
                    // }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <main class="p-2 p-sm-3 p-md-3 p-lg-3">
        <h1 class="text-center text-sm-center text-md-start text-lg-start">Almacén</h1>
        <table class="table text-center">
            <thead class="text-white" style="background-color: #be901b;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Código</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Total</th>
                    <?
                    // if (esAdmin()) {
                    //     echo '<th scope="col">Eliminar</th>';
                    //     echo '<th scope="col">Modificar</th>';
                    // }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    // try {
                    //     $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
                    //     $sql = 'select * from ventas';
                    //     $resultado = $conexion->query($sql);
                    //     while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    //         echo '<th scope="row">' . $row['id_ventas'] . '</th>';
                    //         echo '<td>' . $row['usuario_ventas'] . '</td>';
                    //         echo '<td>' . $row['fecha_compra'] . '</td>';
                    //         echo '<td>' . $row['cod_producto'] . '</td>';
                    //         echo '<td>' . $row['cantidad'] . '</td>';
                    //         echo '<td>' . $row['precio_total'] . '</td>';
                    //         if (esAdmin()) {
                    //             echo "<td>";
                    //             echo '<a href="../Funciones/modificarBD.php?opcion=elimina_venta&clave=' . $key['id_ventas'] . '" class="botonG"> 
                    //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    //                         <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    //                     </svg>
                    //                 </a>';
                    //             echo "</td>";
                    //             echo "<td>";
                    //             echo '<a href="../Funciones/modificarBD.php?opcion=modifica_ventas&clave=' . $key['id_ventas'] . '" class="botonG"> 
                    //                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    //                         <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    //                     </svg>
                    //                 </a>';
                    //             echo "</td>";
                    //         }
                    //     }
                    // } catch (Exception $ex) {
                    //     if ($ex->getCode() == 2002) {
                    //         echo '<span style="color:brown"> Fallo de conexión </span>';
                    //     }
                    //     if ($ex->getCode() == 1049) {
                    //         echo '<span style="color:brown"> Base de datos desconocida </span>';
                    //     }
                    //     if ($ex->getCode() == 1045) {
                    //         echo '<span style="color:brown"> Datos incorrectos </span>';
                    //     }
                    // } finally {
                    //     unset($conexion);
                    // }
                    ?>
                </tr>
            </tbody>
        </table>
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