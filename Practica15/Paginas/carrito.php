<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/principal.css">
    <title>Carrito</title>
</head>
<body>
            <?
                
            require("../seguro/conexionBD.php");
            require("../Funciones/funciones.php");
            
                session_start();
                if (estaValidado()) {
                    vendido();
                    header('Location: ../index.php');
                    exit;
                }else {
                    header('Location: ../login.php');
                    exit;
                }
            ?>
        
</body>
</html>