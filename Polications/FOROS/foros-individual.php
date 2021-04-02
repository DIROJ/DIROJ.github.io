<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Foros</title>
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
        ?>

        <!--
        <div class="image-container">
          <div class="text">INDIVIDUAL</div>
        </div>
        -->
        <main class="principal">

            <section class="topic">
                <h1 class="titulo" >TITULOssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssAAA</h1>
                <div class="tema">
                    <i class="fas fa-user-tie ico-sm"></i>
                    <h6>PRÁCTICAS</h6> 
                </div>
                <p class="usuario">Usuario</p>
                <p class="tiempo">Fecha y Hora</p>
            </section>

            <form action="" method="POST" class="comment-add" enctype="multipart/form-data"> 
                <!--<label for="genero" class="letra-form">Género</label><br>-->
                <textarea type="text" name="comentario" required class="input-comment" value="" maxlength="512"
                 placeholder="Agregar un comentario" rows="6" cols="133"></textarea>
                <input type="submit" name="subir" value="Comentar" class="comentar" >
            </form>
            

            
            <article class="comments">
                <p class="comment-user">Usuario</p>
                <p class="comment-time">fecha y hora</p>
                <pre class="comment">Cometario</pre>
                <i class="fas fa-reply reply"></i>
            </article>

            <article class="comments">
                <p class="comment-user">Usuario</p>
                <p class="comment-time">fecha y hora</p>
                <pre class="comment">Cometario</pre>
                <i class="fas fa-reply reply"></i>
            </article>


            <ul class="list">

            <?php
           /* $indexC = 0;
            while ($indexC < $arr_COC['resultsC']){


                echo '<li>';

                    echo '    <div class="tar">
                                <a href="#" class="' . $stC[$indexC] . ' hv">';
                    echo '        <div class="ico-cont"> '; 
                    echo '          <i class="' . $logoC[$indexC] . '"></i>';
                    echo '        </div>';
                    echo '        <div class="tarjeta-cuerpo">';
                    echo '          <h2>' . $nombreC[$indexC] . '</h2>';
                    echo '          <h4>Número de Foros: ' . $nufo[$indexC] . '</h4>';
                    echo '        </div>
                                </a>';
                    echo '    </div>';
                    echo '</li>';
                    $indexC++;

            }
            */?>



            </ul>

        
        </main>

        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <!--<script src="../scripts/foros.js"></script>-->
        <script src="../scripts/plantilla.js"></script>

        

    </body>
    
</html>