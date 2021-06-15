<?php
    require 'conec.php';
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");


    echo $name = $_POST["titulo"];
    echo $user = $_POST["user"];
    echo $tema = $_POST["tema"];
    echo $ide = $_POST["ide"];

    $del_co_sql = "DELETE FROM `$tema` WHERE Texto = '$name' AND ID = '$ide'";
    $del_co_eje = mysqli_query($conexion, $del_co_sql);


    if ($del_co_eje){
        header("location: ../../FOROS/foros-individual-admin.php?titulo=$tema");
      }
?>