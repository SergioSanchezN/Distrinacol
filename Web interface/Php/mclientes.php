<?php
include("Conexion.php");
$conn=conectarse();
$result=pg_query("select * from ciudades");
$result2=pg_query("select * from tipo_sanguineo");
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
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
			<form action="clientesm.php" method="post">
				<div class="form-group">
					<label for=""><strong>INGRESE SU NOMBRE</strong></label>
					<input type="text" name="N" class="form-control">
					<label for=""><strong>INGRESE SU DIRECCION</strong></label>
					<input type="text" name="D" class="form-control">
					<label for=""><strong>INGRESE LA CEDULA A MODIFICAR </strong></label>
					<input type="text" name="C"  class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;>
					<label for=""><strong>INGRESE SU TELEFONO</strong></label>
					<input type="text" name="T" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
					<label for=""><strong>CIUDAD</strong></label>
					<select name="CI" class="form-control">
						<?php
							While($row = pg_fetch_array ($result))
							{
								$codigo= $row["cod_ciudad"];
								$nombre = $row["nombre"];
								echo "<option value=".$codigo.">".$codigo.",".$nombre."</option>";
							}
						?>
					</select>
					<label for=""><strong>TIPO DE SANGRE</strong></label>
					<select name="TI" class="form-control">
						<?php
							While($row = pg_fetch_array ($result2))
							{
								$codigo= $row["cod_sanguineo"];
								$nombre = $row["rh"];
								$tipo = $row["tipo"];
								echo "<option value=".$codigo.">".$codigo.",".$nombre.",".$tipo."</option>";
							}
						?>
					</select>
					<button type="submit" class="btn btn-primary" >ENVIAR</button>
					<button type="reset" class="btn btn-primary">BORRAR</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
hacer_pie();
?>