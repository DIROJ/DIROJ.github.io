<?php


    function carr($carrera, $semestre){
        require 'conec.php';
        $acentos = $conexion->query("SET NAMES 'utf8'");
    
        $sqlC = "SELECT * FROM `materia` WHERE Carrera = '$carrera' AND Semestre = '$semestre'";
        $ejecuC = mysqli_query($conexion, $sqlC);

        global $materia, $arr_COC, $iteradorC;
        $iteradorC = 0;

        $sql_COC = "SELECT COUNT(*) AS `resultsC` FROM `materia` WHERE Carrera = '$carrera' AND Semestre = '$semestre'";
        $eje_COC = mysqli_query($conexion, $sql_COC);
        $arr_COC = mysqli_fetch_array($eje_COC);


        while ($infC=mysqli_fetch_array($ejecuC)){
                
            $materia[$iteradorC] = $infC["Descripcion"];
            $iteradorC++;
        }     
    }

    
        
?>