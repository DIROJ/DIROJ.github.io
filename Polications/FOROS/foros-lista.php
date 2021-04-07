<html lang="es-MX"> <!--Lenguaje-->

   
    
    <head>                     
        <?php 
            global $tema;
            $tema = $_GET["name"];
            echo '<title>Lista foros - ' . $tema . '</title>'; 
        ?>
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
        con información sobre la Escuela Politécnica de Guadalajara, en este apartado en 
        especifico se encuentran los de un tema en general.">
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
            header("Content-Type: text/html;charset=utf-8");
            require '../scripts/PHP/conec.php';
            $acentos = $conexion->query("SET NAMES 'utf8'");
        
            $sentencia = "SELECT * FROM `lista-foros` WHERE Short = '$tema'";
            $consulta = mysqli_query($conexion, $sentencia);
    
            global $nombre, $tipo, $logo, $short, $color, $fecha, $usuario, $colorf;
            $iterador = 0;
    
            $sql = "SELECT COUNT(*) AS `results` FROM `lista-foros` WHERE Short = '$tema'";
            $eje = mysqli_query($conexion, $sql);
            $arr = mysqli_fetch_array($eje);
    
    
            while ($inf=mysqli_fetch_array($consulta)){
                    
                $nombre [$iterador] = $inf ["Nombre"];
                $tipo   [$iterador] = $inf ["Tipo"];
                $color  [$iterador] = $inf ["Color"];
                $logo   [$iterador] = $inf ["Logo"];
                $short  [$iterador] = $inf ["Short"];
                $fecha  [$iterador] = $inf ["Fecha"]; 
                $usuario[$iterador] = $inf ["Usuario"];   
                $colorf [$iterador] = $inf ["Color-F"]; 
                $iterador++;
            }
        ?>

        <?php
            echo '<div class="image-container">';
            echo '  <div class="text ' . $colorf[0] . '">' . $tema. '</div>';
            echo '</div>';
        ?> 
        
        <ul class="list">

        <?php
            $index = 0;
            
            while ($index < $arr['results']){
                

                echo '<li>';

                    echo '    <div class="tar">
                                <a href=" foros-individual.php?titulo=' . $nombre[$index] . '" class="' . $color[$index] . ' hv">';

                    echo '        <div class="ico-cont"> '; 
                    echo '          <i class="' . $logo[$index]  . '"></i>';
                    echo '        </div>';
                    echo '        <div class="tarjeta-cuerpo">';
                    echo '          <h2>' . $nombre[$index] . '</h2>';
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