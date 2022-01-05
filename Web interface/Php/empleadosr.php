<?php
	include("Conexion.php");
	$conn=conectarse(); 
	include("encabezado1.php");
	hacer_encabezado(); 
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
?>
<style>
	.imagen {
		position: relative;
		margin: 8% 10% ;
	}
</style>
	<div class="imagen" style="float: right; width: 20%; ">
		<img  width="100%" src="../Iconos/e.png">
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="clientesr.php" method="post">
				<div class="form-group">

						<label for=""><strong>NOMBRE INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; ">
							<?PHP
         						echo "$nombres"; 
							?>
						</div>
						<label for=""><strong>APELLIDOS INGRESADOS</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$direccion"; 
							?>
						</div>
						<label for=""><strong>CEDULA INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cedula"; 
							?>
						</div>
						<label for=""><strong>TELEFONO INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$telefono"; 
							?>
						</div>
						<label for=""><strong>TIPO DE SANGRE INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cod_sanguineo"; 
							?>
						</div>
						<label for=""><strong>CELULAR INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$celular"; 
							?>
						</div>
						<label for=""><strong>DIRECCION INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$direccion"; 
							?>
						</div>
						<label for=""><strong>CORREO INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$correo"; 
							?>
						</div>
						<label for=""><strong>EPS INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cod_eps"; 
							?>
						</div>
						<label for=""><strong>SALARIO INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$salario"; 
							?>
						</div>
						<label for=""><strong>CARGO INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cargo"; 
							?>
						</div>
						<label for=""><strong>FECHA DE INGRESO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$fecha_ingreso"; 
							?>
						</div>
						<label for=""><strong>TELEFONO FAMILIAR INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$tel_familiar"; 
							?>
						</div>
						<label for=""><strong>CIUDAD INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cod_ciudad"; 
							?>
						</div>
					
					<a href="empleadosf.php"><button type="button" class="btn btn-primary" >ATRAS</button></a>
				</div>
			</form>
		</div>
	</div>
</div>

<?PHP
	$sql3="insert into empleados (nombres, apellidos,cedula,telefono,cod_sanguineo,celular,direccion,correo,cod_eps,salario,cargo,fecha_ingreso, tel_familiar,cod_ciudad) values ('$nombres','$apellidos', '$cedula','$telefono','$cod_sanguineo','$celular','$direccion','$correo','$cod_eps','$salario','$cargo','$fecha_ingreso','$tel_familiar','$cod_ciudad')";

	$rta = pg_query($conn, $sql3);
	$result= pg_affected_rows($rta);

	if($result > 0){
?>
<div style="margin-left:30%; width: 21%;">
	<strong>
		<?php 
	    	echo "REGISTRO EXITOSO";
	 	?>
	</strong>
</div>
<?php 
  }
  else{
 ?>
<div style="margin-left:30%; width: 21%; ">
	<strong>
		<?php 
   		 echo "REGISTRO INVALIDADO";
  		}
  		?>
	</strong>
</div>


<?php 
hacer_pie();
?>