<?php
    function inf(){
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");
    
        $sql = "SELECT `pregunta`, `respuesta` FROM `faq`";
        $ejecu = mysqli_query($conexion, $sql);

        global $pregunta, $respuesta, $arr_CO, $iterador;
        $iterador = 0;

        $sql_CO = "SELECT COUNT(*) AS `results` FROM `faq`";
        $eje_CO = mysqli_query($conexion, $sql_CO);
        $arr_CO = mysqli_fetch_array($eje_CO);


        while ($inf=mysqli_fetch_array($ejecu)){
             
            
            $pregunta[$iterador] = $inf ["pregunta"];
            $respuesta[$iterador] = $inf ["respuesta"];
            
            $iterador++;
            }
        }
?>