<?php
	include("Conexion.php");
	$conn=conectarse(); 
	include("encabezado1.php");
	hacer_encabezado(); 
	$nombres = $_POST["N"];
	$direccion = $_POST["D"];
	$cedula = $_POST["C"];
	$telefono = $_POST["T"];
	$cod_ciudad = $_POST["CI"];
	$cod_sanguineo = $_POST["TI"];
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

						<label for=""><strong>NOMBRE INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; ">
							<?PHP
         						echo "$nombres"; 
							?>
						</div>
						<label for=""><strong>DIRECCION INGRESADA</strong></label>
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
						<label for=""><strong>CIUDAD INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cod_ciudad"; 
							?>
						</div>
						<label for=""><strong>TIPO DE SANGRE INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cod_sanguineo"; 
							?>
						</div>
					<a href="clientesf.php"><button type="button" class="btn btn-primary" >ATRAS</button></a>
				</div>
			</form>
		</div>
	</div>
</div>

<?PHP
	$sql3="insert into cliente (nombres,direccion,cedula,telefono,cod_ciudad,cod_sanguineo) values ('$nombres','$direccion','$cedula','$telefono','$cod_ciudad','$cod_ciudad')";

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
