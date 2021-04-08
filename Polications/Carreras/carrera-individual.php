<!DOCTYPE html>

<html lang="es-MX"> <!--Lenguaje-->


    <head>                     
        <title>Polications - Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/carrera-individual.css">
        <link rel="stylesheet" type="text/css" href="../styles/plantilla.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../images/icono_page.png" type="image/png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
        crossorigin="anonymous">
        <meta name="description" content="Presentación breve de lo que es la carrera de TPSI">
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
        
          
          

        <main>

            <div class = "Descripcion">
            <header class="Titulo">TPSI</header>
            <a> Presentación:
                El programa del Tecnólogo Profesional en Sistemas Informáticos prepara a los estudiantes para 
                su ingreso a nivel superior y ofrece una formación tecnológica en la que se puede desempeñar 
                en las siguientes actividades profesionales:</a><div class="solo">
                <ol>1.-Coordinar y supervisar las actividades relacionadas con la instalación de programas y captura de información.</ol>
                <ol>2.-Formular programas para el procesamiento electrónico de datos y realizan las pruebas para verificar su validez.</ol>
                <ol>3.-Operar equipo informático para el procesamiento, transmisión, almacenamiento y registro de datos.</ol>
                <ol>4.-Operar y controlar computadoras y unidades periféricas</ol></div>
            </div>

            <div class= "Division">
            
            <div class = "Izquierda">
            <header>Semestres</header>
                <ul>
                    <li><a href="">Semestre 1</a></li>
                    <li><a href="">Semestre 2</a></li>
                    <li><a href="">Semestre 3</a></li>
                    <li><a href="">Semestre 4</a></li>
                    <li><a href="">Semestre 5</a></li>
                    <li><a href="">Semestre 6</a></li>
                    <li><a href="">Semestre 7</a></li>
                    <li><a href="">Semestre 8</a></li>
                </ul>
            </div>

            <div class = "Derecha">
            <header>Maestros Encargados</header>

            <div class="imagen"><img src="../images/tpi.jpg"></div>
            <div class="texto"><p></p><p>A ese wey no lo conozno</p><br></div>

            <div class="imagen"><img src="../images/tpi.jpg"></div>
            <div class="texto">A ese wey no lo conozno</div>

            <div class="imagen"><img src="../images/tpi.jpg"></div>
            <div class="texto">A ese wey no lo conozno</div>

            </div>
        </main>
        


        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script src="../scripts/plantilla.js"></script>

        

    </body>
    
</html>
