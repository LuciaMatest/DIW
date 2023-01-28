<?php
require '../Conexion/conexionBD.php';

// Usuario
function validarUser($user, $pass)
{
    try {
        $conexion = new PDO('mysql:host =' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $sql = 'select * from usuarios where usuario = ? and clave = ?;';
        $sql_preparada = $conexion->prepare($sql);
        $pass_encriptada = sha1($pass);
        $array = array($user, $pass_encriptada);
        $sql_preparada->execute($array);
        if ($sql_preparada->rowCount() == 1) {
            session_start();
            $_SESSION['validado'] = true;
            $row = $sql_preparada->fetch();
            $_SESSION['user'] = $user;
            $_SESSION['contraseña'] = $pass;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['email'] = $row['correo'];
            $_SESSION['fecha'] = $row['fecha'];
            $_SESSION['roles'] = $row['rol'];
            unset($conexion);
            return true;
        } else {
            unset($conexion);
            return false;
        }
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function validaUsuario($user)
{
    try {
        $conexion = new PDO('mysql:host =' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $sql = "select * from usuarios where usuario= ? ;";
        $sql_preparada = $conexion->prepare($sql);
        $array = array($user);
        $sql_preparada->execute($array);
        if ($sql_preparada->rowCount() == 0) {
            unset($conexion);
            return true;
        } else {
            unset($conexion);
            return false;
        }
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function nuevoUsuario()
{
    try {
        $conexion = new PDO('mysql:host =' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $inserta = "insert into usuarios values (?,?,?,?,?,?);";
        $sql_preparada = $conexion->prepare($inserta);
        $array = array($_REQUEST['user'], sha1($_REQUEST['contraseña']), $_REQUEST['nombre'], $_REQUEST['email'], $_REQUEST['fecha'], $_REQUEST['rol']);
        $sql_preparada->execute($array);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function actualizarUsuario()
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $actualiza = "update usuarios set clave=?,nombre=?,correo=?,fecha=?,rol=? where usuario=?;";
        $sql_preparada = $conexion->prepare($actualiza);
        $array = array(sha1($_REQUEST['contraseña']), $_REQUEST['nombre'], $_REQUEST['email'], $_REQUEST['fecha'], $_REQUEST['rol'], $_REQUEST['user']);
        $sql_preparada->execute($array);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

// Productos
function ventaProducto()
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $inserta = "insert into ventas values (?,?,?,?,?);";
        $actualiza = "update productos set stock=? where cod_producto=?;";
        $nuevo_stock = $_REQUEST['stock'] - $_REQUEST['cantidad'];

        $sql_preparada = $conexion->prepare($inserta);
        $sql_preparada2 = $conexion->prepare($actualiza);

        $array = array($_SESSION['user'], date('Y-m-d'), $_REQUEST['cod_producto'], $_REQUEST['cantidad'], floatval($_REQUEST['precio']) * (floatval($_REQUEST['cantidad'])));
        $array2 = array($nuevo_stock, $_REQUEST['cod_producto']);

        $sql_preparada->execute($array);
        $sql_preparada2->execute($array2);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function añadirStock($nombre)
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $inserta = "insert into albaran values (?,?,?,?);";
        $actualiza = "update productos set stock='" . $nombre . "' where cod_producto='" . $_REQUEST['id'] . "';";

        $sql_preparada = $conexion->prepare($inserta);

        $array = array(date('Y-m-d'), (int)($_REQUEST['cod_producto']), (int)($_REQUEST['cantidad']), $_SESSION['usuario_albaran']);

        $sql_preparada->execute($array);
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
}

function añadirProducto()
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $inserta = "insert into productos values (?,?,?,?,?,?);";
        $sql_preparada = $conexion->prepare($inserta);
        $array = array("Imagen/" . $_FILES['fichero']['name'], "Imagen/" . $_FILES['fichero']['name'], $_REQUEST['nombre'], $_REQUEST['descripcion'], $_SESSION['precio'], (int)$_REQUEST['stock']);
        $sql_preparada->execute($array);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function actualizarProducto()
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $actualiza1 = "update productos set precio='" . (float)$_REQUEST['precio'] . "' where cod_producto='" . $_REQUEST['cod_producto'] . "';";
        $actualiza2 = "update productos set descripcion='" . $_REQUEST['descripcion'] . "' where cod_producto='" . $_REQUEST['cod_producto'] . "';";

        $sql_preparada1 = $conexion->prepare($actualiza1);
        $sql_preparada2 = $conexion->prepare($actualiza2);

        $sql_preparada1->execute();
        $sql_preparada2->execute();
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function actualizarAlbaran()
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $actualiza1 = "update albaran set fecha_albaran='" . $_REQUEST['fecha_albaran'] . "' where id_albaran='" . $_REQUEST['id_albaran'] . "';";
        $actualiza2 = "update albaran set cantidad='" . (int)$_REQUEST['cantidad'] . "' where id_albaran='" . $_REQUEST['id_albaran'] . "';";

        $sql_preparada1 = $conexion->prepare($actualiza1);
        $sql_preparada2 = $conexion->prepare($actualiza2);

        $sql_preparada1->execute();
        $sql_preparada2->execute();
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
    }
}

function eliminarVenta()
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $elimina = "delete from ventas where id_ventas='" . $_REQUEST['id'] . "';";

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
}

function eliminarAlbaran()
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $elimina = "delete from albaran where id_albaran='" . $_REQUEST['id'] . "';";

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
}

// Find
function findAll($nombre)
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $sql = 'select * from ' . $nombre . ';';
        $resultado = $conexion->query($sql);
        $array = $resultado->fetchAll(PDO::FETCH_ASSOC);
        unset($conexion);
        return $array;
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
        return false;
    }
}

function findByIdAlb($id, $nombre)
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $sql = "select * from ' . $nombre . ' where id_albaran = ?";
        $sql_preparada = $conexion->prepare($sql);
        $resultado = $sql_preparada->execute(array($id));
        if ($resultado) {
            $producto = $sql_preparada->fetchAll(PDO::FETCH_ASSOC);
            unset($conexion);
            return $producto;
        } else {
            return false;
        }
        unset($conexion);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
        return false;
    }
}

function findByIdPro($id, $nombre)
{
    try {
        $conexion = new PDO('mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=' . BBDD, USER, PASS);
        $sql = "select * from ' . $nombre . ' where cod_producto = ?";
        $sql_preparada = $conexion->prepare($sql);
        $resultado = $sql_preparada->execute(array($id));
        if ($resultado) {
            $producto = $sql_preparada->fetchAll(PDO::FETCH_ASSOC);
            unset($conexion);
            return $producto;
        } else {
            return false;
        }
        unset($conexion);
    } catch (Exception $ex) {
        print_r($ex);
        unset($conexion);
        return false;
    }
}
