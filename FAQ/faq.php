<!DOCTYPE html>
<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Preguntas Frecuentes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/faq.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta name="description" content="En esta página se muestran las preguntas frecuentes
        relacionadas con la Escuela Politécnica de Guadalajara; estas preguntas pueden ser sobre
        como realizar determinados trámites o donde realizarlos.">
        <meta name="author" content="Rob Mckenna">
    </head>
    
    <?php
    require '../scripts/PHP/faq-func.php';
    inf();
    ?>

    <body class="cuerpo">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src = "../bootstrap/js/bootstrap.min.js" ></script>


        


        <?php 

            require '../scripts/PHP/nav.php';
            nav();
        ?>

        <div class="image-container">
          <div class="text">PREGUNTAS FRECUENTES</div>
        </div>


        <?php
        $index = 0;
                


        echo '<button class="accordion first">' . $pregunta[$index] . '</button>';
        echo '<div class="panel">';
        echo '  <p class="letra">' . $respuesta[$index] . '</p>';
        echo '</div>';
        $index++;

        while ($index < $arr_CO['results']){

        echo '<button class="accordion">' . $pregunta[$index] . '</button>';
        echo '<div class="panel">';
        echo '  <p class="letra">' . $respuesta[$index] . '</p>';
        echo '</div>';

        $index++;}
        ?>



        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script src="../scripts/faq.js"></script>
        <script src="../scripts/plantilla.js"></script>

        

    </body>
    
</html>
