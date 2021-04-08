<!DOCTYPE html>

<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
    <?php
            $tituloR = $_GET["name"]; 
            echo '<title>' . $tituloR . '</title>';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/carrera-individual.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">
        <meta name="description" content="Esta página muestra una presentación sobre cada una de las
        carreras que se imparten en la Escuela Politécnica de Guadalajara">
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
            $acentosC = $conexion->query("SET NAMES 'utf8'");
            $sqlC = "SELECT `presentacion`, `descripcion` FROM `info-carrera` WHERE nombre = '$tituloR' ";
            $ejecuC = mysqli_query($conexion, $sqlC);
            
            global $presen, $desc;
            $infor=mysqli_fetch_array($ejecuC);
                $presen = $infor ["presentacion"];
                $desc   = $infor ["descripcion"];
        ?>
          

        <main>

            <div class = "Descripcion">
                <?php
                 echo '    <header class="Titulo">' . $tituloR . '</header>';
                 echo '        <p class="presen">' . $presen . '</p>';
                 
                 echo '        <pre class="act">' . $desc . '</pre>';
                 
                 echo '    </div>';
                 

                 echo '    <div class= "Division">';
                 echo '        <div class = "Izquierda">';
                 echo '            <header>Semestres</header>';
                 echo '            <ul class="lista">';
                 echo '                <li class="sem"><a href="">Semestre 1</a></li>';
                 echo '                <li class="sem"><a href="">Semestre 2</a></li>';
                 echo '                <li class="sem"><a href="">Semestre 3</a></li>';
                 echo '                <li class="sem"><a href="">Semestre 4</a></li>';
                 echo '                <li class="sem"><a href="">Semestre 5</a></li>';
                 echo '                <li class="sem"><a href="">Semestre 6</a></li>';
                 echo '                <li class="sem"><a href="">Semestre 7</a></li>';
                 echo '                <li class="sem"><a href="">Semestre 8</a></li>';
                 echo '            </ul>';
                 echo '        </div>';
                 

                 echo '        <div class = "Derecha">';
                 echo '            <header>Maestros Encargados</header>';
    
                 echo '            <div class="imagen"><img src="../images/tpi.jpg"></div>';
                 echo '            <div class="texto"><p></p><p>A ese wey no lo conozno</p><br></div>';
    
                 echo '            <div class="imagen"><img src="../images/tpi.jpg"></div>';
                 echo '            <div class="texto">A ese wey no lo conozno</div>';
    
                 echo '            <div class="imagen"><img src="../images/tpi.jpg"></div>';
                 echo '            <div class="texto">A ese wey no lo conozno</div>';
                 echo '        </div>';
                 echo '    </div>';
                ?>
        </main>
        

                
        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script src="../scripts/plantilla.js"></script>

        

    </body>
    
</html>
