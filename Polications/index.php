<!DOCTYPE html>

<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/plantilla.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">

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
                session_start();
                if (isset($_SESSION["usuario"])){
                    require 'scripts/PHP/nav-user.php';
                    nav();
                }else{
                require 'scripts/PHP/nav.php';
                nav();
                }
        ?>
        
          
          

        <main>

            <header class="page-header header container-fluid">
                <section class="description">
                  <h1>POLICATIONS</h1>
                  <p class="des">El sitio de Polications esta destinado para alumnos y aspirantes que
                    desean ingresar a la Escuela Politécnica de Guadalajara. tiene la finalidad
                    de mejorar la comunicación entre los estudiantes de la comunidad de la Escuela
                    Politécnica de Guadalajara, resolver dudas, establecer y mejorar la comunicación,
                    informar a aspirantes y alumnos así como mostrar un poco del ambiente de la escuela.
                  </p>
                </section>
            </header>


            <section  class="cards">
            <a href="Foros/" class="vinc-f">
            <div class="card">
                <button class="foro-b"><i class="fab fa-forumbee foro-i"></i></button>
                <h1>Foros</h1>
                <p>Los foros son espacios de dialogo, resolución de dudas y
                     publicación de avisos en general. Estos se organizan
                     conforme a las carreras, tambien hay foros generales
                    para otros temas de interes como becas, servicio social, etc.</p>
            </div>
            </a>
            <a href="FAQ/" class="vinc-p">
            <div class="card">
            <button class="pregunta-b"><i class="fa fa-question pregunta-i"></i></i></button>
                <h1>Preguntas Frecuentes</h1>
                <p>La sección de preguntas frecuentes esta destinada a resolver las preguntas
                    que resultan más obvias, pero que de igual manera hay muchos que desconocen,
                    pueden ser del tipo: horarios de oficinas, cómo realizar trámites, etc.</p>
            </div>
            </a>
            <a href="Carreras/" class="vinc-c">
            <div class="card">
                <button class="carrera-b"><i class="fa fa-graduation-cap carrera-i"></i></i></button>
                <h1>Carreras</h1>
                <p>El apartado de carreras se encarga de mostrar información general sobre las carreras
                    que se imparten dentro de la escuela, las materias que se abordan en las diferentes
                    carreras y maestros que imparten estas materias.
                </p>
            </div>
            </a>
            <a href="Mapa/" class="vinc-m">
            <div class="card">
                <button class="map-b"><i class="fa fa-map-marker-alt map-i"></i></i></button>
                <h1>Mapa</h1>
                <p>El mapa se encarga de mostrar las aulas o sitios importantes dentro de cada
                    edificio, tambien muestra información correspondiente a las aulas
                    importantes que se ubican en estos como pueden ser horarios, encargados, etc.</p>
            </div>
            </a>
            <section>
        </main>
        


        <?php
            require 'scripts/PHP/footer.php';
            footer();
        ?>


        <script src="scripts/js/index.js"></script>
        <script src="scripts/js/plantilla.js"></script>

        

    </body>
    
</html>
