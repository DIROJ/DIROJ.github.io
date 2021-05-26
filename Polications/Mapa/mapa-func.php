<?php




    header("Content-Type: text/html;charset=utf-8");
        require '../scripts/PHP/conec.php';
        $acentos = $conexion->query("SET NAMES 'utf8'");

    $place= $_POST["Lugar"];

    $SQL_l = "SELECT * FROM `mapa` WHERE Nombre = '$place'";
    $consulta_l = mysqli_query($conexion, $SQL_l);
    $arr_l = mysqli_fetch_array($consulta_l);


    $sql_cont = "SELECT COUNT(*) AS `no_per` FROM `personal` WHERE Lugar = '$place'";
    $eje_cont= mysqli_query($conexion, $sql_cont);
    $arr_cont = mysqli_fetch_array($eje_cont);


    $SQL_p = "SELECT * FROM `personal` WHERE Lugar = '$place'";
    $consulta_p = mysqli_query($conexion, $SQL_p);
   
    $cont=0;
    while($data = mysqli_fetch_array($consulta_p)){

        $Nombre  [$cont] = $data["Nombre"];
        $Lugar   [$cont] = $data["Lugar"];
        $Horario [$cont] = $data["Horario"];
        $cont++;
    }
    
    
    echo' <p class="info_lugar">'.$arr_l[1].'</p>';
    echo' <p>Ubicación: '.$arr_l[2].'</p>';
    if ($arr_cont['no_per'] > 0){
    $aux=0;
    while($aux<$arr_cont['no_per']){
        echo' <p>Encargado: '.$Nombre[$aux].'</p>';
        echo' <p>Horario: '.$Horario[$aux].'</p>';
        $aux++;
    }
}else{
    echo' <p>Horario: '.$arr_l[3].'</p>';
}
    


?>