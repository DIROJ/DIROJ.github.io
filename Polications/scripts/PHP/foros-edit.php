<?php

    require 'conec.php';
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");
    
    $tituloF = $_POST["tituloF"];
    $titulo = $_POST["titulo"];
    $id     = $_POST["id"];
    
    if ($titulo == $tituloF){
        header("location: ../../FOROS/foros-individual-admin.php?titulo=$titulo");
    }else{

    $edit_sql = "UPDATE `lista-foros` SET `Nombre`='$titulo' WHERE ID = '$id'";
    $edit_eje = mysqli_query($conexion, $edit_sql);
    
    $ch_sql = "RENAME TABLE `$tituloF` TO `$titulo`";
    $ch_eje = mysqli_query($conexion, $ch_sql);
    
    if ($edit_eje & $ch_eje){
        header("location: ../../FOROS/foros-individual-admin.php?titulo=$titulo");
    }
    }
?>