<html lang="es-MX"> <!--Lenguaje-->


    <head> 
        <?php
        global $tituloR;
            $tituloR = $_GET["titulo"]; 
            echo '<title>' . $tituloR . '</title>';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/foro-individual.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "../bootstrap/js/bootstrap.min.js" ></script>

        <meta name="description" content="Esta es la página de discusión de un foro
        determinado de un tema en específico.">
        <meta name="author" content="Rob Mckenna">
    </head>
    
    

    <body class="cuerpo">

        
        <?php
            header("Content-Type: text/html;charset=utf-8");
            require '../scripts/PHP/conec.php';
            $acentosR = $conexion->query("SET NAMES 'utf8'");

            $sqlR = "SELECT `Logo`, `Short`, `Usuario`, `Color`, `Fecha`, `Color-F`  FROM `lista-foros`  WHERE Nombre = '$tituloR'";
            $ejecuR = mysqli_query($conexion, $sqlR);
            
            global $fechaR, $usuarioR, $logoR, $colorR, $shortR, $botonR, $colorf;

            $infor=mysqli_fetch_array($ejecuR);

                $usuarioR  = $infor ["Usuario"];
                $logoR     = $infor ["Logo"];
                $colorR    = $infor ["Color"]; 
                $shortR    = $infor ["Short"];
                $fechaR    = $infor ["Fecha"];
                $colorF    = $infor ["Color-F"];
        
        ?>

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

        
        <main class="principal">

            <section class="topic">
                <?php
                echo '<h1 class="titulo" id="titulo">' . $tituloR . '</h1>';
                echo '<div class="tema">';
                echo '    <i class="' . $logoR . ' ' . $colorR . '"></i>';
                echo '    <h6 class="' . $colorR . '" id ="theme">' . $shortR . '</h6> ';
                echo '</div>';
                echo '<p class="usuario">' . $usuarioR . '</p>';
                echo '<p class="tiempo">' . $fechaR . '</p>';
                ?>
            </section>
            
            

            <p id="aqui" >
                <?php
                    require 'foros-individual-show.php';
                    mostrar($tituloR);
                    
                ?>
            </p>
            

            

        
        </main>

        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script type="text/javascript" src="../scripts/js/foros-individual.js"></script>
        <script src="../scripts/js/plantilla.js"></script>

        


        

    </body>
    
</html>