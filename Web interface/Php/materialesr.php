<?php
	include("Conexion.php");
	$conn=conectarse(); 
	include("encabezado1.php");
	hacer_encabezado(); 
		 $cod_material = $_POST["C"]; 
         $tipo = $_POST["T"]; 
		 $material_fabricacion = $_POST["MF"];
		 $tamaño = $_POST["TA"];
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

						<label for=""><strong>CODIGO INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; ">
							<?PHP
         						echo "$cod_material"; 
							?>
						</div>
						<label for=""><strong>TIPO DE MATERIAL INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$tipo"; 
							?>
						</div>
						<label for=""><strong>MATERIAL DE FABRICACION INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$material_fabricacion"; 
							?>
						</div>
						<label for=""><strong>TAMAÑO INGRESADO</strong></label>
						<div style="background:#FFFFFF; border-radius: 10px 10px 10px 10px; " >
							<?PHP
         						echo "$tamaño"; 
							?>
						</div>
					<a href="materialesf.php"><button type="button" class="btn btn-primary" >ATRAS</button></a>
				</div>
			</form>
		</div>
	</div>
</div>

<?PHP
	$sql3="insert into materiales_obra (cod_material, tipo, material_fabricacion, tamaño) values ('$cod_material','$tipo', '$material_fabricacion','$tamaño')";

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