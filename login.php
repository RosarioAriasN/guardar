<?php
require 'conexion.php';
session_start();

if ($_POST) {
  $user =$_POST['user'];
  $pass=$_POST['password'];
$mostrar="SELECT * FROM usuarios WHERE usuario = '$user' AND password = '$pass'";
$sqlmostrar=$mysqli->query($mostrar);


  if ($row=$sqlmostrar->fetch_assoc()) {
    $_SESSION['id_user']=$row['id'];
    $_SESSION['id_tipo']=$row['tipodiabetico'];
    $_SESSION['tipodiabetico']=$row['tipodiabetico'];
    header("Location:user.php");
  }else{?>
    <script type="text/javascript">
      alert("Usuario y/o contraseña incorrectos");
      header("Location:index.php");
    </script>
  <?php }
}

 ?>