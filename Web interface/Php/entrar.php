<?php 
session_start();
 	$usuario = $_POST["u"];
	$contrasena = $_POST["co"];
 ?>
 <?PHP
 include("conexion.php");
$conn=conectarse();
 ?>
<?PHP
	$sql3="select * from usuarios where usuario = '$usuario' and contrasena = '$contrasena'";
	$res=pg_query($conn,$sql3);
	$filas=pg_fetch_row($res);

	if($filas != array()){
		$_SESSION["usuario"] = $filas[1];
		$_SESSION["tipo"] = $filas[4];
		header("location:../test.php");
	}
	else {
		header("location:login.php?estado=error");
	}
?>
