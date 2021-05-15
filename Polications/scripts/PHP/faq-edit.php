<?php

    require 'conec.php';
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");
    
    echo $pregunta_e = $_POST["pregunta"];
    echo $respuesta_e = $_POST["respuesta"];
    echo $id_e = $_POST["id"];

    
    $editp_sql = "UPDATE `faq` SET `pregunta`='$pregunta_e', `respuesta`='$respuesta_e'  WHERE ID = '$id_e'";
    $editp_eje = mysqli_query($conexion, $editp_sql);
    
    
    if ($editp_eje){
        header("location: ../../FAQ/index-admin.php");
    }

?>