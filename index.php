<!DOCTYPE html>

<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/plantilla.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta name="description" content="Esta es la página de presentación para el sitio
        de la Escuela Politécnica de Guadalajara">
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
        
          
          

        <main>

            <header class="page-header header container-fluid">
                <section class="description">
                  <h1>POLICATIONS</h1>
                  <p>El sitio de Polications esta destinado para alumnos y aspirantes que
                    desean ingresar a la Escuela Politécnica de Guadalajara. tiene la finalidad
                    de mejorar la comunicación entre los estudiantes de la comunidad de la Escuela
                    Politécnica de Guadalajara, resolver dudas, establecer y mejorar la comunicación,
                    informar a aspirantes y alumnos así como mostrar un poco del ambiente de la escuela.
                  </p>
                </section>
            </header>


            <div class="card">
                <img src="images/Logo320.png" alt="Denim Jeans" style="width:100%">
                <h1>Foros</h1>
                <p>Some text about the Foros..</p>
            </div>
            <div class="card">
                <img src="images/Logo320.png" alt="Denim Jeans" style="width:100%">
                <h1>Preguntas Frecuentes</h1>
                <p>Some text about the Preguntas..</p>
            </div>
            <div class="card">
                <img src="images/Logo320.png" alt="Denim Jeans" style="width:100%">
                <h1>Carreras</h1>
                <p>Some text about the Carreras..</p>
            </div>
            <div class="card">
                <img src="images/Logo320.png" alt="Denim Jeans" style="width:100%">
                <h1>Mapa</h1>
                <p>Some text about the Mapa..</p>
            </div>

        </main>
        


        <?php
            require 'footer.php';
            footer();
        ?>


        <script src="scripts/index.js"></script>
        <script src="scripts/plantilla.js"></script>

        

    </body>
    
</html>