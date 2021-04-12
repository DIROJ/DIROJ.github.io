<?php

    function verificar_rol($recibir){
    require 'conec.php';
    header("Content-Type: text/html;charset=utf-8");
    require 'conec.php';
    $acentos = $conexion->query("SET NAMES 'utf8'");

    
    $check = $recibir;

    $check_sql = "SELECT `Rol` FROM `usuarios` WHERE Usuario = '$check'";
    $check_ejecu = mysqli_query($conexion, $check_sql);
    $check_arr = mysqli_fetch_array($check_ejecu);
        return $check_arr[0];
    }

?>