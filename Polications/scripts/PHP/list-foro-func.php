<?php
    function inf(){
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");
    
        $sql = "SELECT * FROM `lista-foros`";
        $ejecu = mysqli_query($conexion, $sql);

        global $nombre, $no, $logo, $href, $st, $arr_CO, $iterador;
        $iterador = 0;

        $sql_CO = "SELECT COUNT(*) AS `results` FROM `lista-foros`";
        $eje_CO = mysqli_query($conexion, $sql_CO);
        $arr_CO = mysqli_fetch_array($eje_CO);


        while ($inf=mysqli_fetch_array($ejecu)){
             
            
            $nombre[$iterador] = $inf ["Nombre"];
            $no[$iterador] = $inf ["No."];
            $logo[$iterador] = $inf ["Logo"];
            $href[$iterador] = $inf ["Href"];
            $st[$iterador] = $inf ["color"];
            
            
            $iterador++;
            }
        }
?>