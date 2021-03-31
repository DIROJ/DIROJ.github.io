<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Foros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/foros-lista.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">

        <meta name="description" content="En esta página se muestra las lista de foros
        con información sobre la Escuela Politécnica de Guadalajara, estos pueden ser de las
        diferentes carreras u otros temas de interes general para la comunidad de estudiantil.">
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
            global $tema;
            $tema = $_GET["name"];
        ?>

               

        <?php
            header("Content-Type: text/html;charset=utf-8");
            require '../scripts/PHP/conec.php';
            $acentos = $conexion->query("SET NAMES 'utf8'");
        
            $sentencia = "SELECT * FROM `lista-foros` WHERE Short = '$tema'";
            $consulta = mysqli_query($conexion, $sentencia);
    
            global $nombre, $tipo, $logo, $short, $color;
            $iterador = 0;
    
            $sql = "SELECT COUNT(*) AS `results` FROM `lista-foros` WHERE Tipo = '$tema'";
            $eje = mysqli_query($conexion, $sql);
            $arr = mysqli_fetch_array($eje);
    
    
            while ($inf=mysqli_fetch_array($consulta)){
                    
                $nombre [$iterador] = $inf ["Nombre"];
                $tipo   [$iterador] = $inf ["Tipo"];
                $color  [$iterador] = $inf ["Color"];
                $logo   [$iterador] = $inf ["Logo"];
                $short  [$iterador] = $inf ["Short"];
                $iterador++;
            }
        ?>

        <?php
            echo '<div class="image-container">';
            echo '  <div class="text ' . $color[0] . '">' . $tema. '</div>';
            echo '</div>';
        ?> 
        
        <ul class="list">

        <?php
            $index = -1;
            while ($index < $arr['results']){


                echo '<li>';

                    echo '    <div class="tar">
                                <a href=" foros-lista.php?name=' . $nombre[$index +1] . '" class="' . $color[$index +1] . ' hv">';
                    echo '        <div class="ico-cont"> '; 
                    echo '          <i class="' . $logo[$index +1] . '"></i>';
                    echo '        </div>';
                    echo '        <div class="tarjeta-cuerpo">';
                    echo '          <h2>' . $nombre[$index+1] . '</h2>';
                    echo '        </div>
                                </a>';
                    echo '    </div>';
                    echo '</li>';
                    $index++;

            }
        ?>

        </ul>


        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <!--<script src="../scripts/foros.js"></script>-->
        <script src="../scripts/plantilla.js"></script>

        

    </body>
    
</html>