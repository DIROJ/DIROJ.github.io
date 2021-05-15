<?php
    require 'conec.php';
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");


    $id = $_POST["id"];

    $delp_sql = "DELETE FROM `faq` WHERE ID = '$id'";
    $delp_eje = mysqli_query($conexion, $delp_sql);

    if ($delp_eje){
        header("location: ../../FAQ/index-admin.php");
    }
?>