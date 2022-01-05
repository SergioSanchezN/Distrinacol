<?php
include("Conexion.php");
$conn=conectarse();
$result=pg_query("select * from ciudades");
$result2=pg_query("select * from tipo_sanguineo");
$result3 = pg_query("select * from eps");
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
			<form action="empleadosm.php" method="post">
				<div class="form-group">
					<label for=""><strong>INGRESE SU NOMBRE</strong></label>
					<input type="text" name="N" class="form-control">
					<label for=""><strong>INGRESE SU APELLIDO</strong></label>
					<input type="text" name="A" class="form-control">
					<label for=""><strong>INGRESE LA CEDULA A MODIFICAR</strong></label>
					<input type="text" name="C" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
					<label for=""><strong>INGRESE SU TELEFONO</strong></label>
					<input type="text" name="T" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
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
					<label for=""><strong>INGRESE SU CELULAR</strong></label>
					<input type="text" name="CE" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
					<label for=""><strong>INGRESE SU DIRECCION</strong></label>
					<input type="text" name="DI" class="form-control">
					<label for=""><strong>INGRESE SU CORREO</strong></label>
					<input type="text" name="CO" class="form-control" onChange="validarEmail1(this.value);">
					<label for=""><strong>EPS</strong></label>
					<select name="CDE" class="form-control">
						<?php
							While($row = pg_fetch_array ($result3))
							{
								$codigo= $row["codigo_eps"];
								$nombre = $row["nombre_afiliado"];
								$apellido = $row["apellido_afiliado"];
								echo "<option value=".$codigo.">".$codigo.",".$nombre." ".$apellido."</option>";
							}
						?>
					</select>
					<label for=""><strong>INGRESE SU SALARIO</strong></label>
					<input type="text" name="SA" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
					<label for=""><strong>INGRESE SU CARGO</strong></label>
					<input type="text" name="CA" class="form-control">
					<label for=""><strong>FECHA DE INGRESO</strong></label>
					<input type="text" name="FI" class="form-control">
					<label for=""><strong>TELEFONO FAMILIAR</strong></label>
					<input type="text" name="FA" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
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