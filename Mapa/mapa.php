<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Mapa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/mapa.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta name="description" content="Esta página muestra un mapa de la Escuela Politécnica de 
        Guadalajara, este mapa contiene llos lugares de mayor relevancia dentro de la escuela y una
        descripción de estos.">
        <meta name="author" content="Rob Mckenna">
    </head>
    
    

    <body class="cuerpo">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src = "../bootstrap/js/bootstrap.min.js" ></script>


        <?php 

            require '../scripts/PHP/nav.php';
            nav();
        ?>
        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script src="../scripts/mapa.js"></script>
        <script src="../scripts/plantilla.js"></script>

        

    </body>
    
</html>
