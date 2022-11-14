<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['id_user'])) {
	header("Location: index.php");
}
if ($_SESSION['tipo']==1) {
	header("Location: indexAdmin.php");
}


$user="SELECT * FROM usuarios where id = {$_SESSION['id_user']}";
$sqluser=$mysqli->query($user);

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
						<a href="index.php"><img src="2.gif" wight="300" height="3  00"alt="Caja de Ahorro"></a>
					</div>
					<div class="msjBienvenida">
					<h3>Bienvenidos<h3>
					<?php while($show=mysqli_fetch_assoc($sqluser)) {?><p><?= $show['usuario']?> ¡¡</p><?php } ?>
				</div>
				</div>
				<nav class="menuPrincipal">
					<div class="enlacesMenuP" id="enlacesMenuP" style="background-color: yellow; color: yellow; font-weight: bold; font-size: x-large">
						<a href="index.php"> Inicio</a>
						
						<a href="datos.php"> datos</a>
						
						<a href="logout.php">Cerrar sesión</a>
					</div>
				</nav>
				<script src="js/jquery-3.2.0.js"></script>
		</header>
			
		<section class="primary-content">
			<main>
			<article>
					
					
					<div class="title_p"><h2>Ahorro</h2></div>
				
				</article>
					<!-- Carousel -->
<div id="demo" class="carousel slide container mt-5" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
	<img src="4.jpg" alt="banner 1" class="d-block w-60">
  </div>
  <div class="carousel-item">
	<img src="4.jpg" alt="banner 1" class="d-block w-60">
  </div>
  <div class="carousel-item">
	<img src="3.png" alt="banner 1" class="d-block w-60">
  </div>
</div>
</div>
<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

					
<article>
				<div class="title_p">
					<div class="title_p"><h2>Es una cooperativa de ahorro y préstamo con más 60 años de experiencia que contribuye a mejorar la calidad de vida de sus socios</h2></div>
					<br><hr>
					<p>El buen ahorrador planifica sus gastos y deja, al menos, una moneda para dedicarla al ahorro</p>
						</div>
				
			
			
		</section>
	</body>
<html>