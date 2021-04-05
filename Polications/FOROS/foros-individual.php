<html lang="es-MX"> <!--Lenguaje-->


    <head> 
        <?php
            $tituloR = $_GET["titulo"]; 
            echo '<title>' . $tituloR . '</title>';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/foro-individual.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
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

            $sqlR = "SELECT `Logo`, `Short`, `Usuario`, `Color`, `Fecha`, `Boton`  FROM `lista-foros` WHERE Nombre = '$tituloR' ";
            $ejecuR = mysqli_query($conexion, $sqlR);
            
            global $fechaR, $usuarioR, $logoR, $colorR, $shortR, $botonR;

            $infor=mysqli_fetch_array($ejecuR);

                $usuarioR  = $infor ["Usuario"];
                $logoR     = $infor ["Logo"];
                $colorR    = $infor ["Color"]; 
                $shortR    = $infor ["Short"];
                $fechaR    = $infor ["Fecha"];
                $botonR    = $infor ["Boton"];
        
        ?>

        <?php 
            require '../scripts/PHP/nav.php';
            nav();
        ?>

        
        <main class="principal">

            <section class="topic">
                <?php
                echo '<h1 class="titulo" id="titulo">' . $tituloR . '</h1>';
                
                echo '<div class="tema">';
                echo '    <i class="' . $logoR . ' ' . $colorR . '"></i>';
                echo '    <h6 class="' . $colorR . '">' . $shortR . '</h6> ';
                echo '</div>';
                echo '<p class="usuario">' . $usuarioR . '</p>';
                echo '<p class="tiempo">' . $fechaR . '</p>';
                ?>
            </section>

            <form action="" method="POST" class="comment-add" enctype="multipart/form-data"> 
                <!--<label for="genero" class="letra-form">Género</label><br>-->
                <textarea type="text" name="comentario" required class="input-comment" maxlength="512"
                 placeholder="Agregar un comentario" rows="6" cols="133" id="comentario"></textarea>
                
                <input type="submit" name="subir" value="Comentar" class="comentar" id="comentar" onclick="Hola($('#comentario').val())">
                 
            </form>

            <p id="aqui">
                <?php
                require 'ejemplo.php'
                ?>
            </p>
            

            

        
        </main>

        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script type="text/javascript" src="../scripts/foros-individual.js"></script>
        <script src="../scripts/plantilla.js"></script>

        

    </body>
    
</html>