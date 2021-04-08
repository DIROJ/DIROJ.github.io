<?php

//conexion con la base de datos
require 'conec.php';



//recuperacion del formulario HTML
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$apellidoP = $_POST["apellidoP"];
$apellidoM = $_POST["apellidoM"];
$pass = $_POST["password"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

//envio de la informacion a la tabla
  //sentencia sql
 

  $sql = "INSERT INTO `formulario`(`Usuario`,`Nombre`,`ApellidoP`,`ApellidoM`,`Password`,`Correo`,`Telefono`)
   VALUES ('$usuario', '$nombre', '$apellidoP', '$apellidoM', '$pass', '$correo', '$telefono')";

  //ejecucion de la sentecia sql
  $ejecucion = mysqli_query ($conexion, $sql);

  if($ejecucion){
      header("location: sign_in.php");
    }else{
      echo 'ERROR';
    }
 




?>