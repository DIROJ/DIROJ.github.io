<!DOCTYPE html>
<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Preguntas Frecuentes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/faq.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">

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
            session_start();
            if (isset($_SESSION["usuario"])){
                require '../scripts/PHP/nav-user.php';
                nav();
            }else{
                require '../scripts/PHP/nav.php';
                nav();
            }
        ?>

        <div class="image-container">
          <div class="text">PREGUNTAS FRECUENTES</div>
        </div>

        <button class="agregar" title="Agregar pregunta" onclick="add_info()">Agregar</button>

        <ul class="lista">
        <?php
        $index = 0;
        
        while ($index < $arr_CO['results']){

        echo '<li class="pregunta">';
            echo '<form method="POST" action="../scripts/PHP/faq-edit.php" name="editar">';
                echo '<button type="button" class="accordion"><input type="text" class="pp" name="pregunta" value="' . $pregunta[$index] . '"></button>';
                echo '<div class="panel">';
                echo '  <textarea name="respuesta" class="res-t" col="3">' .$respuesta[$index]. '</textarea>';
                echo '<input type="hidden" name="id" value="'.$id[$index].'">';
                echo ' <button type="submit" class="btn-e" title="Guardar Cambios" ><i class="fas fa-save ico-e"></i></button>';
            echo '</form>';
            echo '<form method ="POST" action ="../scripts/PHP/faq-delete.php">';
                echo ' <input type="hidden" name="id" value="' .$id[$index]. '"  >';
                echo ' <button type="submit" class="btn-t" title="Eliminar" ><i class="fas fa-trash-alt ico-t"></i></button>';
            echo '</form>';
            echo '</div>';
        echo '</li>';

        echo '<div id="add-q" class="modal fade">';
        echo '    <div class="modal-dialog modal-lg modal-dialog-centered">';
        echo '        <div class="modal-content">';
        echo '            <div class="modal-header">';
        echo '                <button type="button" class="close" data-dismiss="modal" aria-label="close">';
        echo '                    <span>x</span>';
        echo '                </button>';
        echo '            </div>';
        echo '            <div class="modal-body text-center">';
        echo '                <h4>Agregar Pregunta</h4>';
        echo '            <div class="input-group">';
        echo '                <form action="../scripts/PHP/faq-add.php" method="POST" name="new-foro" class="add-form" >';
        echo '                    <label for="pregunta" class="lab">Pregunta</label>';
        echo '                    <input type="text" class="in-mod" name="pregunta" required maxlength="64">';
        echo '                    <label for="respuesta" class="lab">Respuesta</label>';
        echo '                    <input type="text" class="in-mod" name="respuesta" required maxlength="255">';
        echo '                    <input type="submit" class="btn-mod" value="Agregar">';
        echo '                </form>';
        echo '            </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';


        $index++;}
        ?>
        </ul>


        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script src="../scripts/js/faq-admin.js"></script>
        <script src="../scripts/js/plantilla.js"></script>


    </body>
    
</html>
