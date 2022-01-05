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
         $apellidos = $_POST["A"]; 
		 $cedula = $_POST["C"];
		 $telefono = $_POST["T"];
		 $cod_sanguineo = $_POST["TI"];
		 $celular = $_POST["CE"];
		 $direccion = $_POST["DI"];
		 $correo = $_POST["CO"];
		 $cod_eps = $_POST["CDE"];
		 $salario = $_POST["SA"];
		 $cargo = $_POST["CA"];
		 $fecha_ingreso = $_POST["FI"];
		 $tel_familiar = $_POST["FA"];
		 $cod_ciudad = $_POST["CI"];

$sql1= "UPDATE empleados SET  nombres='".$nombres."',apellidos='".$apellidos."',telefono='".$telefono."',cod_sanguineo='".$cod_sanguineo."',celular='".$celular."',direccion='".$direccion."',correo='".$correo."',cod_eps='".$cod_eps."',salario='".$salario."',cargo='".$cargo."',fecha_ingreso='".$fecha_ingreso."',tel_familiar='".$tel_familiar."',cod_ciudad='".$cod_ciudad."' where cedula='".$cedula."'";
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