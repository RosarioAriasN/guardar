<?php
	
	//$con = mysqli_connect("localhost","root","","ejemplo") or die ("error");
    $mysqli=new mysqli("localhost","root","","ejemplo");
	if(mysqli_connect_errno()){
		echo 'Connection fail to database: ', mysqli_connect_error();
		exit();
	}	

?>
