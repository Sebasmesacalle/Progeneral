<?php

    include('conexion_be.php');

    $nombre_completo = $_POST['nombre_completo_r'];
    $correo_r = $_POST['correo_r'];
    $usuario_r = $_POST['usuario_r'];
    $contrasena = $_POST['contrasena'];
    //encriptar contraseña
    $contrasena = hash('sha512', $contrasena);  

    //Envío de info
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
              VALUES('$nombre_completo', '$correo_r', '$usuario_r', '$contrasena')";


    //Verificar que el correo no se repita
    
    $Verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo_r'");

    if(mysqli_num_rows($Verificar_correo) > 0){
        echo '
            <script>
                alert("Correo ya existente");
                window.location = "../logear.php";
            </script>
        ';
        exit();
    }

        //Verificar que el usuario no se repita
    
        $Verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario_r'");

        if(mysqli_num_rows($Verificar_usuario) > 0){
            echo '
                <script>
                    alert("Usuario ya existente");
                    window.location = "../logear.php";
                </script>
            ';
            exit();
        }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert("Registro exitoso");
                window.location= "../logear.php";
            </script> 
        ';
    }{
        echo'
        <script>
            alert("Registro fallido, intente de nuevo.");
            window.location= "../logear.php";
        </script> 
    ';
    }

    mysqli_close($conexion);

?>