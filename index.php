<<?php
	require 'conexion.php';

	$errors = array();

	if($_POST)
	{
		$nombre = $_POST['nombre'];
		$password = $_POST['pass'];
		$con_password = $_POST['pass2'];
		$apellidos = $_POST['apellidos'];
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];

		$registrar = "INSERT INTO usuarios(nombre,password,apellidos,usuario,email) VALUES('$nombre','$password','$apellidos','$usuario','$email')";
		$sqlregistrar=$mysqli->query($registrar);

		if ($sqlregistrar==true) {
			header("dadas.php");
		}else {
			echo "error consulta";
		}
	}

?>
<html lang="es"> 
<style type="text/css">
        body{
			background: url(1.jpg);
            background-size: 100%;
        }
        </style>
	<head>
		<meta charset="UTF-8">
		<title>Ahorro</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
		
	</head>
	<body>
		<header id="header">
				<div>
					<div class="logo_menu">
						<a href="index.php"><img src="2.gif" wight="200" height="200" alt="Logo caja de ahorro"></a>
					</div>
					<div>
						<form method="post" class="sesion_menu" action="login.php">
							<div class="titleSesion"><h3 style="font-size: 100;">Iniciar sesión<h3></div>
							<label for="usuario">Usuario:</label>
							<input type="text" id="s_usuario" placeholder="Escribe tu usuario" name="user">
							<label for="contra">Contraseña:</label>
							<input type="password" id="s_pass" placeholder="Contraseña" name="password">
							<input type="submit" value="Entra">
							<a href="javascript:openVentana();" class="btnReM"> Registro</a>
						</form>
					</div>
				</div>
				<nav class="menuPrincipal" style="background-color: yellow; color: yellow; font-weight: bold; font-size: x-large">
					<div class="enlacesMenuP" id="enlacesMenuP">
						<a href="index.php"> Inicio</a>
						<a href="javascript:openVentana();"> Registro</a>
						
					</div>
				</nav>
				<script src="js/jquery-3.2.0.js"></script>
		</header>
			
		<section class="primary-content">
			<main>
				<div class="ventRegist">
					<script type="text/javascript">
						function openVentana(){
							$(".ventRegist").slideDown("slow");
						}
						function closeVentana(){
							$(".ventRegist").slideUp("fast");
						}
					</script>
					<div class="contenedor-formulario">
						<div class="wrap">
							<div>
								<div class="titleRegist"><h3>Formulario de registro<h3></div>
								<a class="cerrarRegist" href="javascript:closeVentana();">X</a>
							</div>
							<form action="<?php $_SERVER['PHP_SELF'] ?>" class="formulario" name="formulario_registro" method="post" autocomplete="off">
								<div class="input-group">
									<input type="text" id="nombre" name="nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required>
									<label class="label" for="nombre">Nombre:</label>
								</div>
								<div class="input-group">
									<input type="text" id="apelidos" name="apellidos" value="<?php if(isset($apellidos)) echo $apellidos; ?>" required>
									<label class="label" for="apellidos">Apellidos:</label>
								</div>
								<div class="input-group">
									<input type="email" id="email" name="email" value="<?php if(isset($email)) echo $email; ?>" required>
									<label class="label" for="email">Correo:</label>
								</div>
								<div class="input-group">
									<input type="text" id="usuario" name="usuario" value="<?php if(isset($email)) echo $email; ?>" required>
									<label class="label" for="usuario">Usuario:</label>
								</div>
								<div class="input-group">
									<input type="password" id="pass" name="pass" required>
									<label class="label" for="pass">Contraseña:</label>
								</div>
								<div class="input-group">
									<input type="password" id="pass2" name="pass2" required>
									<label class="label" for="pass2">Repetir Contraseña:</label>
								</div>
								<div class="input-group radio">
									<input type="radio" name="sexo" id="hombre" value="Hombre">
									<label for="hombre">Hombre</label>
									<input type="radio" name="sexo" id="mujer" value="Mujer">
									<label for="mujer">Mujer</label>
								</div>
								<div class="input-group checkbox">
									<input type="checkbox" id="terminos" name="terminos" value="true">
									<label for="terminos">Acepto los terminos y condiciones.</label>
								</div>

								<input type="submit" id="btn-submit" value="Enviar">
							</form>
						</div>
					</div>
				</div>
				<script src="js/formulario.js"></script>
				

				
			
			
			<footer>
				<p>© 2022 wwwCajadeAhorro.com - Todos los derechos reservados</p>
				<p>Versión 1.0 de la web</p>
			</footer>
		</section>
	</body>
<html>