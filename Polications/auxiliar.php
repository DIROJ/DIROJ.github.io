<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro de Sesión</title>
	<link rel="stylesheet" type="text/css" href="styles/plantilla.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="images/icono_page.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
    crossorigin="anonymous">
    <meta name="description" content="En esta página puedes realizar tu registro para el sitio
	Polications">
    <meta name="author" content="Rob Mckenna">
    
</head>
<body class= "cuerpo">

	

		<?php
			require 'scripts/PHP/nav.php';
			nav();
		?>
    <header class="header" id="header">
		<br>
		<h1>Polications</h1>
		<h2>Registro de nuevo Usuario</h2>
	</header>

		
	<main>
		

		

		<form action="scripts/PHP/registro-func.php" method="POST" class="formulario" id="formulario">
			
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuario117">
                    <input type="hidden"  value="ssssss" name="nombre" >
                    <input type="hidden"  value="ssssss" name="apellidoP" >
                    <input type="hidden"  value="ssssss" name="apellidoM" >
                    <input type="hidden"  value="ssssss" name="password" >
                    <input type="hidden"  value="ssssss" name="correo" >
                    <input type="hidden"  value="3333333333" name="telefono" >
			<!-- Grupo: Nombre -->
			
			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" >Enviar</button>
			</div>
		</form>
	</main>
    </body>
    </html>