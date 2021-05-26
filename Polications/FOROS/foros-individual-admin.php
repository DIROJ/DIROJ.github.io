<html lang="es-MX"> <!--Lenguaje-->


    <head> 
        <?php
        global $tituloR;
            $tituloR = $_GET["titulo"];
            $tituloR2 = $_GET["titulo"]; 
            echo '<title>' . $tituloR . '</title>';
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/foro-individual-admin.css">
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

            $sqlR = "SELECT `ID`, `Logo`, `Short`, `Usuario`, `Color`, `Fecha`, `Color-F`  FROM `lista-foros` WHERE Nombre = '$tituloR' ";
            $ejecuR = mysqli_query($conexion, $sqlR);
            
            global $fechaR, $usuarioR, $logoR, $colorR, $shortR, $botonR, $colorf, $id;

            $infor=mysqli_fetch_array($ejecuR);

                $id        = $infor ["ID"];
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
                echo '<form action="../scripts/PHP/foros-edit.php" method="POST" class="comment-add" enctype="multipart/form-data">';
                echo '<input class="titulo" type="text" name="titulo" id="titulo" value="' . $tituloR . '" maxlength="64"></input>';
                echo '<input type="hidden" value="'.$id.'" name="id"></input>';
                echo '<input type="hidden" value="'.$tituloR2.'" name="tituloF"></input>';
                echo '<div class="tema">';
                echo '    <i class="' . $logoR . ' ' . $colorR . '"></i>';
                echo '    <h6 class="' . $colorR . '" id ="theme">' . $shortR . '</h6> ';
                echo '</div>';
                echo '<p class="usuario">' . $usuarioR . '</p>';
                echo '<p class="tiempo">' . $fechaR . '</p>';
                echo '<button type="submit" class="liga guardar" title="Guardar"><i class="fas fa-save ico-e"></i></button>';
                echo '</form>';
                echo '<a class="liga" onclick="del()" title="Eliminar Foro"><i class="fas fa-trash-alt ico-t"></i></a>';

                ?>
            </section>

            

            <p id="aqui">
                <?php
                function mostrar_comentarios($Busca){
                    header("Content-Type: text/html;charset=utf-8");
                    require '../scripts/PHP/conec.php';
                    $acentos = $conexion->query("SET NAMES 'utf8'");
            
            
                if(mysqli_query($conexion,"DESCRIBE `$Busca`")) {
                    $sql = "SELECT `Usuario`, `Texto`, `Tiempo`, `Tipo`, `Tema` FROM `$Busca`";
                    $ejecu = mysqli_query($conexion, $sql);
                    global $Usuario, $Texto, $Tiempo, $Tipo, $Tema, $arr_com, $iterador, $indexcom;
                    $iterador = 0;
                    $sql_com = "SELECT COUNT(*) AS `resultscom` FROM `$Busca`";
                    $eje_com = mysqli_query($conexion, $sql_com);
                    $arr_com = mysqli_fetch_array($eje_com);
                    while ($inf=mysqli_fetch_array($ejecu)){
                        $Usuario[$iterador] = $inf ["Usuario"];
                        $Texto  [$iterador] = $inf ["Texto"];
                        $Tiempo [$iterador] = $inf["Tiempo"]; 
                        $Tipo   [$iterador] = $inf["Tipo"];
                        $Tema   [$iterador] = $inf["Tema"];
                        $iterador++;
                    }
                    
                    
                    $indexcom = 0;
                    while ($indexcom < $arr_com['resultscom']){
                        echo '<article class="comments">';
                        echo '<p class="comment-user">' . $Usuario[$indexcom] . '</p>';
                        echo "<button class='btn-cerrar' onclick='remove()' title='Eliminar Comentario'><i class='fas fa-times cerrar'></i></button>";
                        echo '<p class="comment-time">' . $Tiempo[$indexcom] . '</p>';
                        echo '<pre class="comment ">' . $Texto[$indexcom] . '</pre>';
                        echo '<i class="fas fa-reply reply"></i>';
                        echo '</article>';

                        echo '    <div id="modal-remove" class="modal fade">';
                        echo '    <div class="modal-dialog modal-lg modal-dialog-centered">';
                        echo '        <div class="modal-content">';
                        echo '            <div class="modal-header">';
                        echo '                <button type="button" class="close" data-dismiss="modal" aria-label="close">';
                        echo '                    <span>x</span>';
                        echo '                </button>';
                        echo '            </div>';
                        echo '            <div class="modal-body text-center">';
                        echo '            ';
                        echo '                <h4>¿Estas seguro de que quieres cambiar el nombre?</h4>';
                        echo '            <div class="input-group">';
                        echo '                <form action="../scripts/PHP/foros-com-del.php" method="POST" name="new-foro" class="input-group-append" >';
                        echo '                ';
                        echo '                    <input type="hidden" name="titulo" id="el-ti" value="'. $Texto[$indexcom].'" >';
                        echo '                    <input type="hidden" name="user"   id="el-us" value="'. $Usuario[$indexcom].'" >';
                        echo '                    <input type="hidden" name="tema"   id="el-te" value="'. $Busca.'" >';
                        echo '                    <input type="submit" class="btn-acept" value="Confirmar">';
                        echo '                    <button type="button" class="btn-cancel" data-dismiss="modal" aria-label="close">';
                        echo '                        <span>Cancelar</span>';
                        echo '                    </button>';
                        echo '                </form>';
                        echo '            </div>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                        $indexcom++;
                    }           
                }else{
                    echo 'Este foro aún no tiene comentarios';
                }
            }
                mostrar_comentarios($tituloR);
                ?>


        
        </main>

        <?php
            require '../scripts/PHP/footer.php';
            footer();
        ?>


        <script type="text/javascript" src="../scripts/js/foros-individual.js"></script>
        <script src="../scripts/js/plantilla.js"></script>

        <div id="modal-del" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span>x</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                    <?php 
                    echo '    <h4>¿Estas seguro de que quieres eliminar el foro ' .$tituloR. '?</h4>';
                    echo '<div class="input-group">';
                    echo '    <form action="../scripts/PHP/foros-delete.php" method="POST" name="new-foro" class="input-group-append" >';
                        
                            echo '<input type="hidden" name="titulo" value="' .$tituloR. '"  >';
                            echo '<input type="hidden" name="tema" value="' .$shortR. '"  >'   
                        ?>
                            <input type="submit" class="btn-acept" value="Confirmar">
                            <button type="button" class="btn-cancel" data-dismiss="modal" aria-label="close">
                                <span>Cancelar</span>
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    
</html>