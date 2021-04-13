<!DOCTYPE html>

<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Carreras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/carreras.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">

        <meta name="description" content="En esta página se muestra una lista de las carreras que se
        imparten en la Escuela Politécnica de Guadalajara, tanto de Tecnólogo Profesional, como
        de Bachillerato Tecnológico">
        <meta name="author" content="Rob Mckenna">
    </head>
    
    

    <body class="cuerpo">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src = "../bootstrap/js/bootstrap.min.js" ></script>


        <?php 
            session_start();
            if (isset($_SESSION["usuario"])){
                require '../scripts/PHP/nav-user.php';
                nav();
            }else{
                require '../scripts/PHP/nav.php';
                nav();
            }
        ?>

        
        <?php
            require '../scripts/PHP/carr-func.php';
            lista();
        ?>

        <div class="image-container">
          <div class="text">CARRERAS</div>
        </div>

        
        <li>

        <?php
            $index = 0;

            while ($index < $arr_CO['results']){
            
            
                    echo '<ul>';
            
                    echo '    <div class="tar">
                                <a href="carrera-individual.php?name=' . $short[$index] . '" class="' . $st[$index] . ' hv">';
                    echo '        <div class="ico-cont"> '; 
                    echo '          <i class="' . $logo[$index] . '"></i>';
                    echo '        </div>';
                    echo '        <div class="tarjeta-cuerpo">';
                    echo '          <h2>' . $nombre[$index] . '</h2>';
                    echo '          <h3>' . $short[$index] . '</h3>';
                    echo '        </div>
                                </a>';
                    echo '    </div>';
                    echo '</ul>';
                    $index++;
            
            }
        ?>

        




</li>


        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>

        <!--<script src="../scripts/carreras.js"></script>-->
        <script src="../scripts/js/plantilla.js"></script>

        

    </body>
    
</html>
