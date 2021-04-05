<html lang="es-MX"> <!--Lenguaje-->


    <head> 
        <?php
            $titulo = $_GET["titulo"];                    
            echo '<title>' . $titulo . '</title>';
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
            require '../scripts/PHP/nav.php';
            nav();
        ?>

        <!--
        <div class="image-container">
          <div class="text">INDIVIDUAL</div>
        </div>
        -->
        <main class="principal">

            <section class="topic">
                <?php
                echo '<h1 class="titulo" id="titulo">' . $titulo . '</h1>';
                ?>
                <div class="tema">
                    <i class="fas fa-user-tie ico-sm"></i>
                    <h6>PRÁCTICAS</h6> 
                </div>
                <p class="usuario">Usuario</p>
                <p class="tiempo">Fecha y Hora</p>
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