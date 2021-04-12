<?php

    function mostrar ($Busca){
        
        header("Content-Type: text/html;charset=utf-8");
            require '../scripts/PHP/conec.php';
            $acentos = $conexion->query("SET NAMES 'utf8'");


        if(mysqli_query($conexion,"DESCRIBE `$Busca`")) {
            $sql = "SELECT `Usuario`, `Texto`, `Tiempo`, `Tipo`, `Tema` FROM `$Busca`";
            $ejecu = mysqli_query($conexion, $sql);
            global $Usuario, $Texto, $Tiempo, $Tipo, $Tema, $arr_com, $iterador;
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
                echo '<p class="comment-time">' . $Tiempo[$indexcom] . '</p>';
                echo '<pre class="comment">' . $Texto[$indexcom] . '</pre>';
                echo '<i class="fas fa-reply reply"></i>';
                echo '</article>';
                $indexcom++;
            }           
        }else{
            echo 'Este foro aún no tiene comentarios';
        }
    }

    
?>