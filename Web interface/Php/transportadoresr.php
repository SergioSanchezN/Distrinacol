<?php
	include("Conexion.php");
	$conn=conectarse(); 
	include("encabezado1.php");
	hacer_encabezado(); 
		 $nombre = $_POST["N"]; 
		 $id = $_POST["I"];
		 $placa = $_POST["P"];
		 $cod_certificacion = $_POST["CI"];
?>
<style>
	.imagen {
		position: relative;
		margin: 3% 10% ;
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
         						echo "$nombre"; 
							?>
						</div>
						<label for=""><strong>ID INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$id"; 
							?>
						</div>
						<label for=""><strong>PLACA INGRESADA</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$placa"; 
							?>
						</div>
						<label for=""><strong>CODIGO DE CERTIFICACION INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$cod_certificacion"; 
							?>
						</div>
						
					<a href="transportadoresf.php"><button type="button" class="btn btn-primary" >ATRAS</button></a>
				</div>
			</form>
		</div>
	</div>
</div>

<?PHP
	$sql3="insert into transportadores (nombre, id, placa, cod_certificacion) values ('$nombre' ,'$id','$placa','$cod_certificacion')";

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