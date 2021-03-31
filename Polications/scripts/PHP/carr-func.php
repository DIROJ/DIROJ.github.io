<?php


    function lista(){
        header("Content-Type: text/html;charset=utf-8");
        require 'conec.php';
        $acentos = $conexion->query("SET NAMES 'utf8'");
    
        $sql = "SELECT * FROM `carreras` ";
        $ejecu = mysqli_query($conexion, $sql);

        global $nombre, $short, $logo, $href, $st, $tipo, $arr_CO, $iterador;
        $iterador = 0;

        $sql_CO = "SELECT COUNT(*) AS `results` FROM `carreras`";
        $eje_CO = mysqli_query($conexion, $sql_CO);
        $arr_CO = mysqli_fetch_array($eje_CO);


        while ($inf=mysqli_fetch_array($ejecu)){
                
            $nombre[$iterador] = $inf ["Nombre"];
            $short [$iterador] = $inf ["Short"];
            $logo  [$iterador] = $inf ["Logo"];
            $href  [$iterador] = $inf ["Href"];
            $st    [$iterador] = $inf ["Color"];
            $iterador++;
        }     
    }

     
?>