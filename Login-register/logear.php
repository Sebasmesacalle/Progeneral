<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro psicoexperiencia</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__fondo">
                <div class="caja__fondo-login">
                    <h3>¿Do you already got an account?</h3>
                    <p>Inicia sección para entrar a la página</p>
                    <button id="btn__iniciar-seccion">Iniciar sección</button>
                </div>
                <div class="caja__fondo-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para poder Iniciar sección. </p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Este es el formulario para ingresar y registrar-->
            <div class="contenedor__login-register">
                <!--Este pertenece al login-->
                <form action="php/ingreso_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sección</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo">
                    <input type="password"  placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Este pertenece al registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo_r">
                    <input type="email" placeholder="Correo electrónico" name="correo_r">
                    <input type="text" placeholder="Usuario" name="usuario_r">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/script.js"></script>


</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>