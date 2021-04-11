<?php

require 'conec.php';

$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];

session_start();
$_SESSION['usuario']=$usuario;




$consulta="SELECT*FROM formulario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index.php");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);