<?php
  require 'conec.php';
  
    $usuario   = $_POST["usuario"];
    $nombre    = $_POST["nombre"];
    $apellidoP = $_POST["apellidoP"];
    $apellidoM = $_POST["apellidoM"];
    $pass      = $_POST["password"];
    $correo    = $_POST["correo"];
    $telefono  = $_POST["telefono"];
  
    $sql = "INSERT INTO `usuarios`(`Usuario`,`Nombre`,`ApellidoP`,`ApellidoM`,`Password`,`Correo`,`Telefono`)
     VALUES ('$usuario', '$nombre', '$apellidoP', '$apellidoM', '$pass', '$correo', '$telefono')";
    $ejecucion = mysqli_query ($conexion, $sql);
  
    if ($ejecucion){
      session_start();
      $_SESSION ["usuario"] = $usuario;
      header('location: ../../index.php');
    }else{
      echo 'ya existe ese usuario';
    }
?>