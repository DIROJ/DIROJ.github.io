<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Carreras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/carreras.css">
        <link rel="stylesheet" type="text/css" href="styles/plantilla.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta name="description" content="Esta página muestra información sobre las carreras que
        se ofrecen en la Escuela Politécnica de Guadalajara, esta informacion va desde las materias
        que se imparten a lo largo de la carrera asi como los maestros que integran los distintos
        departamentos.">
        <meta name="author" content="Rob Mckenna">
    </head>
    
    

    <body class="cuerpo">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src = "bootstrap/js/bootstrap.min.js" ></script>


        <?php 

            require 'nav.php';
            nav();
        ?>
        <?php
            require 'footer.php';
            footer();
        ?>


        <script src="scripts/carreras.js"></script>
        <script src="scripts/plantilla.js"></script>

        

    </body>
    
</html>