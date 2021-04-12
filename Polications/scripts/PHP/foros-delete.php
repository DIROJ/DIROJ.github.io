<?php
    require 'conec.php';
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");


    $name = $_POST["titulo"];
    $tema = $_POST["tema"];

    $del_sql = "DROP TABLE `$name`";
    $del_eje = mysqli_query($conexion, $del_sql);

    $del_sql = "DELETE FROM `lista-foros` WHERE Nombre = '$name'";
    $del_eje = mysqli_query($conexion, $del_sql);

    if ($del_eje & $del_eje){
        header("location: ../../FOROS/foros-lista.php?name=$tema");
    }
?>