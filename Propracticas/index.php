<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu" class="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>

            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical center</h1>
                <p>Estaré modificando este archivo con el fin deorganizarlo. 
                   Adipisci illo ipsam recusandae possimus quisquam placeat quis, 
                   veritatis rem repellat et eos illum expedita beatae sunt fugiat!
                   Libero optio ipsam perferendis!
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header img">
                <img src="imagenes/left.png" alt="">
            </div>
        </div>
    </header>


    <section class="about container">
        <div class="about-img">
            <img src="imagenes/about.png" alt="">
        </div>

        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quidem voluptatum odit officia dolores sed rem temporibus possimus ut hic praesentium aliquam,
                harum perferendis neque, quae accusamus quibusdam repellendus sapiente eligendi?
            </p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quidem voluptatum odit officia dolores sed rem temporibus possimus ut hic praesentium aliquam,
                harum perferendis neque, quae accusamus quibusdam repellendus sapiente eligendi?
            </p>
        </div>
    </section>


    <main class="servicios">
        
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user">
                    <h3>Pediatría</h3>
                </i>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope">
                    <h3>Ginecología</h3>
                </i>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse">
                    <h3>Dermatologia</h3>
                </i>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital">
                    <h3>Cardiologia</h3>
                </i>
            </div>
        </div>
    </main>

    <section class="formulario container">

        <form method="post" autocomplete="off">
            <h2>Agenda tu consulta</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido"> 
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Celular"> 
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo"> 
                    <i class="fa-solid fa-envelope"></i>
                </div>
                
                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onclick="myFuntion()">     
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">Logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFuntion() {
            Window.location.href="http://localhost/Propracticas"
        }  
    </script>

</body>
</html>