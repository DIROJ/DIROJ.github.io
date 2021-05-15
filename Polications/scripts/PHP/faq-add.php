<?php
require 'conec.php';
header("Content-Type: text/html;charset=utf-8");
require 'conec.php';
$acentos = $conexion->query("SET NAMES 'utf8'");

    session_start();

    
    $pregunta  = $_POST['pregunta'];
    $respuesta = $_POST['respuesta'];

    $comparar = "SELECT * FROM `lista-foros`";
    $comparar_eje = mysqli_query($conexion, $comparar);
    

        $insertp_sql = "INSERT INTO `faq` (`pregunta`,`respuesta`)
        VALUES ('$pregunta', '$respuesta')";
        $insertp_eje = mysqli_query($conexion, $insertp_sql);

        header ('location: ../../FAQ/index-admin.php');
    

?>