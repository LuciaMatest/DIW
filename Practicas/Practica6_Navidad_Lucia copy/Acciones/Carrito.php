<?php
session_start();
require('../Funciones/Funciones.php');
require('../Conexion/BBDD.php');
require('../Conexion/conexionBD.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Imagen/logo_1.ico" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Carrito - Bootstrap</title>
</head>

<body>
    <?
    if (estaValidado()) {
        ventaProducto();
        header('Location: ../index.php');
        exit;
    } else {
        header('Location: ../login.php');
        exit;
    }
    ?>
</body>

</html>