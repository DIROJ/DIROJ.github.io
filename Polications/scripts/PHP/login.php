<?php

require 'conec.php';

$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];






$consulta="SELECT * FROM `usuarios` WHERE Usuario ='$usuario' AND Password ='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../../index.php");
    session_start();
    $_SESSION["usuario"] = $usuario;
}else{
    
  header("location:../../login.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);