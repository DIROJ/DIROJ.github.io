<?php
require 'conec.php';
header("Content-Type: text/html;charset=utf-8");
require 'conec.php';
$acentos = $conexion->query("SET NAMES 'utf8'");

    session_start();

    $nombre = $_POST["foro_name"];
    $user   = $_SESSION["usuario"];
    $tipo   = $_POST['tipo'];
    $logo   = $_POST['logo'];
    $short  = $_POST['short'];
    $color  = $_POST['color'];
    $colorf = $_POST['color-f'];

    $comparar = "SELECT * FROM `lista-foros`";
    $comparar_eje = mysqli_query($conexion, $comparar);
    
    $it = 0;
    while ($comparar_arr = mysqli_fetch_array($comparar_eje)){
        $nombres [$it]= $comparar_arr['Nombre'];
        $it++;
    }

    $probar = 0;
    $ite = 0;
    
    while ($ite < $it){
        if ($nombre == $nombres[$ite]){
            echo 'ya existe';
            $probar = 1;
        }$ite ++;
    }
    if ($probar == 0){
        $crear_sql = "CREATE TABLE `$nombre` ( `ID` INT(12) NOT NULL AUTO_INCREMENT , `Usuario` VARCHAR(20) NOT NULL , `Texto`
        VARCHAR(255) NOT NULL , `Tiempo` DATETIME NOT NULL , `Tipo` VARCHAR(20) NOT NULL , `Tema` VARCHAR(20) NOT NULL , PRIMARY KEY (`ID`))";
        $crear_eje = mysqli_query($conexion, $crear_sql);

        $insertar_sql = "INSERT INTO `lista-foros` (`Nombre`,`Tipo`,`Logo`,`Short`,`Color`,`Usuario`,`Fecha`,`Color-F`)
        VALUES ('$nombre', '$tipo', '$logo', '$short', '$color', '$user', CURRENT_TIME, '$colorf')";
        $insertar_eje = mysqli_query($conexion, $insertar_sql);

        header ('location: ../../FOROS/foros-lista.php?name='.$short.'');
    }

?>