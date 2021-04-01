<?php

header("Content-Type: text/html;charset=utf-8");
require 'conec.php';
$acentos = $conexion->query("SET NAMES 'utf8'");

$temas = [
    0 => 'TPMI', 1 => 'TPMYF', 2 => 'TPP', 3 => 'TPPQI', 4 => 'TPSI', 5 => 'TPQAPA',
    6 => 'TPEI', 7 => 'BTDC', 8 => 'BTQM', 9 => 'SERVICIO', 10 => 'PRÁCTICAS', 11 => 'BECAS'
];

$nufo  = [];
$nufoB = [];
$nufoO = [];

$index = 0; $indexB = 7; $indexO = 9;
while ($index < 7){

    $sql = "SELECT COUNT(*) AS `resultsC` FROM `lista-foros` WHERE Short = '$temas[$index]' ";
    $eje = mysqli_query($conexion, $sql);
    $arr = mysqli_fetch_array($eje);

    $nufo[$index] = $arr[0]; 
    $index++;   
}


$index = 0;
while ($indexB < 9){

    $sqlB = "SELECT COUNT(*) AS `resultsC` FROM `lista-foros` WHERE Short = '$temas[$indexB]' ";
    $ejeB = mysqli_query($conexion, $sqlB);
    $arrB = mysqli_fetch_array($ejeB);

    $nufoB[$index] = $arrB[0]; 
    $indexB++;   
    $index++;
}


$index = 0;
while ($indexO < 12){

    $sqlO = "SELECT COUNT(*) AS `resultsC` FROM `lista-foros` WHERE Short = '$temas[$indexO]' ";
    $ejeO = mysqli_query($conexion, $sqlO);
    $arrO = mysqli_fetch_array($ejeO);

    $nufoO[$index] = $arrO[0]; 
    $indexO++;  
    $index++; 
}

/*echo $nufo[0] . '</br>';
echo $nufo[1] . '</br>';
echo $nufo[2] . '</br>';
echo $nufo[3] . '</br>';
echo $nufo[4] . '</br>';
echo $nufo[5] . '</br>';
echo $nufo[6] . '</br>';

echo $nufoB[0] . '</br>';
echo $nufoB[1] . '</br>';

echo $nufoO[0] . '</br>';
echo $nufoO[1] . '</br>';
echo $nufoO[2] . '</br>';
*/
?>
