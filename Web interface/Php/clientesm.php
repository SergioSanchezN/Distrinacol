<?php
include("Conexion.php");
$conn=conectarse();
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
?>
<?PHP
extract($_POST); 
 $conn=conectarse(); 
	$nombres = $_POST["N"];
	$direccion = $_POST["D"];
	$cedula = $_POST["C"];
	$telefono = $_POST["T"];
	$cod_ciudad = $_POST["CI"];
	$cod_sanguineo = $_POST["TI"]; 

$sql1= "UPDATE cliente SET  nombres='".$nombres."',direccion='".$direccion."',cedula='".$cedula."',telefono='".$telefono."',cod_ciudad='".$cod_ciudad."',cod_sanguineo='".$cod_sanguineo."' where cedula='".$cedula."'";
 $result1 = pg_query($conn,$sql1);
	
	
if($result1== false) 
{
	echo "<html>";
	echo "<HEAD>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<div class='container-fluid padding'>
<div class='row welcome text-center'><div class='col-12'>
		<h1 class='display-4'>Los datos no se modificaron correctamente</h1>
	</div></div></div>";
	echo "</BODY>";
	echo "</html>";
	redes();
}
else
{
	echo "<html>";
	echo "<HEAD>";
	echo "</HEAD>";
	echo "<BODY>";
	echo "<div class='container-fluid padding'>
<div class='row welcome text-center'><div class='col-12'>
		<h1 class='display-4'>Los datos se modificaron correctamente</h1>
	</div></div></div>";
	echo "</BODY>";
	echo "</html>";
	echo "<hr class='lin'>";	
}
?>
<?php 
hacer_pie();
?>
