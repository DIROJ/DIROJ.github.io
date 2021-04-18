<!DOCTYPE html>

<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
    <?php 
    global $semestre, $carrera;
        $semestre=$_GET["semestre"];
        $carrera=$_GET["carrera"];
    
        echo '<title>'.$carrera.'</title>';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/Semestre.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">
        <meta name="description" content="Pagina que muestra las materias que llevan en cada correspondiente 
        Semestre">
        <meta name="author" content="Rob Mckenna">
        
    </head>
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
    <body class="cuerpo">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src = "../bootstrap/js/bootstrap.min.js" ></script>


        <?php 
        require '../scripts/PHP/Semestre-func.php';
            carr($carrera, $semestre);
        ?>

        <main>
        
        <div class="Descripcion">
            <div class="titulo">Descripcion del Semestre</div>
            <div class="text"></div>
            

        </div>
       
            <div class= "Division">
                <div class = "Materias">
                <?php 
                $contador = 0;
                while($contador < $arr_COC['resultsC']){
                    echo '<p>'.$materia[$contador].'</p>';
                    $contador++;
                }?>
                </div>
        </div>
        </main>
    


        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script src="../scripts/js/plantilla.js"></script>

        

    </body>
    
</html>
