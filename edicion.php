<br>
<br>
<center>
    <?php
    if(isset($_GET['editar'])){
        echo"VAMOS A EDITAR xd";
        $editar_id = $_GET['editar'];

        $consulta = "SELECT * FROM ahorro WHERE id='$editar_id'";
        $ejecutar = mysqli_query($mysqli, $consulta);

        $fila = mysqli_fetch_array($ejecutar);
       // $nombre = $fila['nombre'];
       
        $nombre = $fila['nombre'];
        $password = $fila['password'];
		$cuenta = $fila['cuenta'];
        $tipoefectivo = $fila['tipoefectivo'];
        $deuda = $fila['deuda'];
        $cantidadprestamo = $fila['cantidadprestamo'];
        $total = $fila['total'];
        $fecha = $fila['fecha'];
	
    }
?>


    <br/>
  
   
    <form method="post" action="">
        <input type="text" name="nombre" value="<?php echo $nombre;
        ?>"/><br/>
        <input type="password" name="password" value="<?php echo $password;
        ?>"/><br/>
        <input type="text" name="cuenta" value="<?php echo $cuenta;
        ?>"/><br/>
        <input type="text" name="tipoefectivo" value="<?php echo $tipoefectivo;
        ?>"/><br/>
        <input type="text" name="deuda" value="<?php echo $deuda;
        ?>"/><br/>
        <input type="text" name="cantidadprestamo" value="<?php echo $cantidadprestamo;
        ?>"/><br/>
        <input type="text" name="total" value="<?php echo $total;
        ?>"/><br/>
        <input type="text" name="fecha" value="<?php echo $fecha;
        ?>"/><br/>
       
        <input type="submit" name="act" value="Actualizado"/>

</form>
<?php

if(isset($_POST['act'])){
    //$actualizar_nombre = $_POST['nuevo'];
    
    $actualizar_nombre = $_POST['nombre'];
    $actualizar_password = $_POST['password'];
    $actualizar_cuenta = $_POST['cuenta'];
    $actualizar_tipoefectivo = $_POST['tipoefectivo'];
    $actualizar_deuda = $_POST['deuda'];
    $actualizar_cantidadprestamo = $_POST['cantidadprestamo'];
    $actualizar_total = $_POST['total'];
    $actualizar_fecha = $_POST['fecha'];
   
    $actualizar = "UPDATE ahorro SET nombre='$actualizar_nombre',password='$actualizar_password',cuenta='$actualizar_cuenta',tipoefectivo='$actualizar_tipoefectivo',deuda='$actualizar_deuda',cantidadprestamo='$actualizar_cantidadprestamo',total='$actualizar_total',fecha='$actualizar_fecha' WHERE id = '$editar_id'";
    //$actualizar = "UPDATE usuario SET nombre='$actualizar_nombre',pass='$actualizar_pass' WHERE id = '$editar_id'";
    $ejecutar = mysqli_query($mysqli, $actualizar);

    if($ejecutar){
       
        echo"<script>alert('USUARIO ACTUALIZADO!')</script>";
        echo"<script>window.open('datos.php','_self')</script>";
    }
}
?>