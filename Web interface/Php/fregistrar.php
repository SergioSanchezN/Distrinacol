<?php 
 	$usuario = $_POST["u"];
 	$correo = $_POST["c"];
 	$tipo = $_POST["t"];
	$contrasena = $_POST["co"];
 ?>
 <?PHP
 include("conexion.php");
$conn=conectarse();
 ?>
<?PHP
	$sql3="insert into usuarios (usuario, contrasena, correo, tipo ) values ('$usuario', '$contrasena', '$correo' ,'$tipo')";
	$rta = pg_query($conn,$sql3);
	$result= pg_result($rta);

	if($result != 0){
		header("location:registrar.php?estado=error");
	}
	else{
		header("location:registrar.php?estado=correcto");
	}

?>

