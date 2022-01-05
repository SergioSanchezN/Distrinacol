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
		 $nombre = $_POST["N"]; 
         $apellidos = $_POST["A"]; 
		 $nit = $_POST["NI"];
		 $direccion = $_POST["D"];

$sql1= "UPDATE proveedores SET  nombre='".$nombre."',apellidos='".$apellidos."',direccion='".$direccion."' where nit='".$nit."'";
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