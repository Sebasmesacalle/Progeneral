<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar seccion");
                window.location = "logear.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido a la prueba</title>
</head>
<body>
    <h1>bienvenido a la página</h1>
    <a href="php/cerrar_seccion.php" class="">Cerrar seccion</a>
</body>
</html>