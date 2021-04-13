<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro de Sesión</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="styles/registro.css">
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
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" required placeholder="Usuario117">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" required placeholder="Emmanuel Ismael">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El Nombre tiene que ser de 4 a 16 dígitos y solo puede contener espacio, numeros y letras.</p>
			</div>

			<!-- Grupo: ApellidoP -->
			<div class="formulario__grupo" id="grupo__apellidoP">
				<label for="apellidoP" class="formulario__label">Apellido Paterno</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidoP" id="apellidoP" required placeholder="Paterno">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El Apellido tiene que ser de 4 a 16 dígitos y solo puede contener espacio, numeros y letras.</p>
			</div>

			<!-- Grupo: ApellidoM -->
			<div class="formulario__grupo" id="grupo__apellidoM">
				<label for="apellidoM" class="formulario__label">Apellido Materno</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidoM" id="apellidoM" required placeholder="Materno">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener espacio, numeros y letras.</p>
			</div>

			<!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" required name="password" id="password">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
			</div>

			<!-- Grupo: Contraseña 2 -->
			<div class="formulario__grupo" id="grupo__password2">
				<label for="password2" class="formulario__label">Repetir Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password" class="formulario__input" required name="password2" id="password2">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" required placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" required placeholder="4491234567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

			<!-- Grupo: Terminos y Condiciones -->
			<!--                                                          Desactivado
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			-->



			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn" name="btn-registrar">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>

	<?php
            require 'scripts/PHP/footer.php';
            footer();
    ?>

	<script src="scripts/js/registro.js"></script>
	<script src="scripts/js/plantilla.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

        
</body>
</html>