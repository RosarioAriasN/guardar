<?php
	
	//$con = mysqli_connect("localhost","root","","app_diabetes") or die ("error");
	$mysqli=new mysqli("localhost","root","","ejemplo");
	if(mysqli_connect_errno()){
		echo 'Connection fail to database: ', mysqli_connect_error();
		exit();
	
	}
?>
<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['id_user'])) {
	header("Location: index.php");
}


$user="SELECT * FROM ahorro where id = {$_SESSION['id_user']}";
$sqluser=$mysqli->query($user);
	
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<title>CRUD</title>

<html lang="es"> 

	<style type="text/css">
        body{
            background: url(1.jpg);
            background-size: 100%;
        }
        </style>
	<script>
		$(windows).load(function(){
			$('.flexslider').flexslider();
		});
	</script>

<body>
<header id="header">
				
						<a href="index.php"><img src="2.gif" alt="Logo" width="400" height="200"></a>
				
					<div class="msjBienvenida">
					<h3>!!Bienvenidossssssssssssss<h3>
					
					
				</div>
				</div>
				<nav class="menuPrincipal" >
					<div class="enlacesMenuP" id="enlacesMenuP" style="background-color: yellow; color: yellow; font-weight: bold; font-size: x-large">
						<a href="index.php" > Inicio</a>
						<a href="datos.php"> Datos</a>
						<a href="logout.php">Cerrar sesión</a>
					</div>
				</nav>
				<script src="js/jquery-3.2.0.js"></script>
		</header>
    <form method="post" action="datos.php" >
        <left>
            <table class="tabless">
                <tr>
        <td>nombre:</td>
        <td>
            <input type="text" name="nombre" placeholder=""/></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password" placeholder=""/></td>
    </tr>
	<tr>
        <td>Numero de Cuenta:</td>
        <td>
            <input type="text" name="apellidos" placeholder=""/></td>
    </tr>
	<tr>
        <td>Tipo de efectivo:</td>
        <td>
            <input type="text" name="usuario" placeholder=""/></td>
    </tr>
	<tr>
        <td>deuda:</td>
        <td>
            <input type="text" name="email" placeholder=""/></td>
    </tr>
    <tr>
        <td>cantidad prestamo:</td>
        <td>
            <input type="text" name="email" placeholder=""/></td>
    </tr>
    <tr>
        <td>total:</td>
        <td>
            <input type="text" name="email" placeholder=""/></td>
    </tr>
    <tr>
        <td>fecha:</td>
        <td>
            <input type="text" name="email" placeholder=""/></td>
    </tr>
    
	
    </table>
    <br>
    <br>

    
        <input type="submit" name="insert" value="Guardar"/>
    </left>
    <br>
     <br>
    </form>

    <?php
    if (isset($_POST['insert'])){

        $nombre = $_POST['nombre'];
		$password = $_POST['password'];
		$cuenta = $_POST['cuenta'];
        $tipoefectivo = $_POST['tipoefectivo'];
        $deuda = $_POST['deuda'];
        $cantidadprestamo = $_POST['cantidadprestamo'];
        $total = $_POST['total'];
        $fecha = $_POST['fecha'];
		
       
// $sql = "INSERT INTO usuarios(nombre,apellidos,usuario,password,email,tipodiabetico,nivelglucosa,altura,peso,ejercicio,dieta,edad) VALUES('$nombre','$apellidos','$usuario','$password','$email','$tipodiabetico','$nivelglucosa','$altura','$peso','$ejercicio','$dieta','$edad')";
//$rta = mysqli_query($conexion, $sql);
        $insertar = "INSERT INTO ahorro (nombre,password,cuenta,tipoefectivo,deuda,cantidadprestamo,total,fecha) VALUES('$nombre','$password','$cuenta','$tipoefectivo','$deuda','$cantidadprestamo','$total','$fecha')";

        $ejecutar = mysqli_query($mysqli, $insertar);

        if($ejecutar){

            echo"<script>alert('USUARIO REGISTRADO!')</script>";
            echo"<script>window.open('datos.php','_self')</script>";
        }
    }

    ?>
    </div>     </br>
    <center>                <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Password</th>
			<th>cuenta</th>
            <th>tipoefectivo</th>
            <th>deuda</th>
            <th>cantidadprestamo</th>
            <th>total</th>
            <th>fecha</th>
		
            <th>Editar</th>
            <th>Borrar</th>
</tr>
<?php

    $consulta = "SELECT * FROM ahorro";

    $ejecutar = mysqli_query($mysqli, $consulta);

    $i = 0;

    while( $fila=mysqli_fetch_array($ejecutar)){
        $id = $fila['id'];
        $nombre = $fila['nombre'];
        $password = $fila['password'];
		$cuenta = $fila['cuenta'];
        $tipoefectivo = $fila['tipoefectivo'];
        $deuda = $fila['deuda'];
        $cantidadprestamo = $fila['cantidadprestamo'];
        $total = $fila['total'];
        $fecha = $fila['fecha'];
	
	
	

        $i++;
    
?>
    <tr align="center">
        <td><?php echo $id; ?></td>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $password; ?></td>
		<td><?php echo $cuenta; ?></td>
        <td><?php echo $tipoefectivo; ?></td>
        <td><?php echo $deuda; ?></td>
        <td><?php echo $cantidadprestamo; ?></td>
        <td><?php echo $total; ?></td>
        <td><?php echo $fecha; ?></td>
		
        <td><a href="datos.php?editar=<?php echo $id; ?>">Editar</a></td>
        <td><a href="datos.php?borrar=<?php echo $id; ?>">Borrar</a></td>
    </tr>
    <?php
    }
    ?>
    </table>
</center>

<?php

if(isset($_GET['editar'])){
    include("edicion.php");
}


if(isset($_GET['borrar'])){
    $borrar_id = $_GET['borrar'];

    $borrar = "DELETE FROM ahorro WHERE id='$borrar_id'";

    $ejecutar = mysqli_query($mysqli, $borrar);

    if($ejecutar){
       
        echo"<script>alert('USUARIO ELIMINADO!')</script>";
        echo"<script>window.open('datos.php','_self')</script>";
    }
}
?>
 </table>
</center>
    </body>
    </html>