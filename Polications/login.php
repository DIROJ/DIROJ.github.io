<html lang="es-MX"> <!--Lenguaje-->


    <head> 
        <title>Inicio de Sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/login.css">
        <link rel="stylesheet" type="text/css" href="styles/plantilla.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "bootstrap/js/bootstrap.min.js" ></script>

        <meta name="description" content="Esta es la página para realizar el Inicio de Sesión">
        <meta name="author" content="Rob Mckenna">
    </head>

 <body class="cuerpo">
        
        <?php 
            require 'scripts/PHP/nav.php';
            nav();
        ?>

    <main class="principal">

        

        <form action="scripts/PHP/login.php" method="POST">

            <img id="LOGO" src="images/logo.png">

            <h2>Iniciar Sesión</h2>

            <input id="Datos" placeholder="Usuario" type="text" name="usuario" required>

            <br>

            <input id="Datos" placeholder="Contraseña" type="password" name="password" required>

            <br>

            <input id="Ingresar" type="submit" value="Ingresar" name="BtnIngresar">
            
            <br>

            <a href="recuperar cuenta.html" style="float:right">Olvidé Mi Contraseña</a>

            <a href="registro.html" style="float:left">Registrarme</a>

        </form>
    </main>

    <?php
        require 'scripts/PHP/footer.php';
        footer();
    ?>     

    <script src="scripts/plantilla.js"></script>

 </body>

</html>