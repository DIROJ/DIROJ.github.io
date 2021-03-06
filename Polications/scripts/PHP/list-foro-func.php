<?php


    function carr(){
        header("Content-Type: text/html;charset=utf-8");
        require 'conec.php';
        $acentos = $conexion->query("SET NAMES 'utf8'");
    
        $sqlC = "SELECT * FROM `lista-foros` WHERE Tipo = 'Carrera'";
        $ejecuC = mysqli_query($conexion, $sqlC);

        global $nombreC, $noC, $logoC, $hrefC, $stC, $tipoC, $arr_COC, $iteradorC;
        $iteradorC = 0;

        $sql_COC = "SELECT COUNT(*) AS `resultsC` FROM `lista-foros` WHERE Tipo = 'Carrera'";
        $eje_COC = mysqli_query($conexion, $sql_COC);
        $arr_COC = mysqli_fetch_array($eje_COC);


        while ($infC=mysqli_fetch_array($ejecuC)){
                
            $nombreC[$iteradorC] = $infC["Nombre"];
            $tipoC  [$iteradorC] = $infC ["Tipo"];
            $noC    [$iteradorC] = $infC ["No."];
            $logoC  [$iteradorC] = $infC ["Logo"];
            $hrefC  [$iteradorC] = $infC ["Href"];
            $stC    [$iteradorC] = $infC ["color"];
            $iteradorC++;
        }     
    }

    function bachi(){
            header("Content-Type: text/html;charset=utf-8");
            require 'conec.php';
            $acentos = $conexion->query("SET NAMES 'utf8'");
            $sqlB = "SELECT * FROM `lista-foros` WHERE Tipo = 'Bachillerato'";
            $ejecuB = mysqli_query($conexion, $sqlB);
    
            global $nombreB, $noB, $logoB, $hrefB, $stB, $tipoB, $arr_COB, $iteradorB;
            $iteradorB = 0;
    
            $sql_COB = "SELECT COUNT(*) AS `resultsB` FROM `lista-foros` WHERE Tipo = 'Bachillerato'";
            $eje_COB= mysqli_query($conexion, $sql_COB);
            $arr_COB = mysqli_fetch_array($eje_COB);
    
    
            while ($infB=mysqli_fetch_array($ejecuB)){
   
                $nombreB[$iteradorB] = $infB ["Nombre"];
                $tipoB  [$iteradorB] = $infB ["Tipo"];
                $noB    [$iteradorB] = $infB ["No."];
                $logoB  [$iteradorB] = $infB ["Logo"];
                $hrefB  [$iteradorB] = $infB ["Href"];
                $stB    [$iteradorB] = $infB ["color"];   
                $iteradorB++;
            }
    }

    function otro(){
            header("Content-Type: text/html;charset=utf-8");
            require 'conec.php';
            $acentos = $conexion->query("SET NAMES 'utf8'");
            $sqlO = "SELECT * FROM `lista-foros` WHERE Tipo = 'Otro'";
            $ejecuO = mysqli_query($conexion, $sqlO);
    
            global $nombreO, $noO, $logoO, $hrefO, $stO, $tipoO, $arr_COO, $iteradorO;
            $iteradorO= 0;
    
            $sql_COO = "SELECT COUNT(*) AS `resultsO` FROM `lista-foros` WHERE Tipo = 'Otro'";
            $eje_COO = mysqli_query($conexion, $sql_COO);
            $arr_COO = mysqli_fetch_array($eje_COO);
    
    
            while ($infO=mysqli_fetch_array($ejecuO)){
   
                $nombreO[$iteradorO] = $infO ["Nombre"];
                $tipoO  [$iteradorO] = $infO ["Tipo"];
                $noO    [$iteradorO] = $infO ["No."];
                $logoO  [$iteradorO] = $infO ["Logo"];
                $hrefO  [$iteradorO] = $infO ["Href"];
                $stO    [$iteradorO] = $infO ["color"];   
                $iteradorO++;
            }
    }
 
        
?>