<?php
include("Conexion.php");
$conn=conectarse();
$result = pg_query("select * from certificaciones");
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
?>
<style>
	.imagen {
		position: relative;
		margin: 5% 10% ;
	}
</style>
	<div class="imagen" style="float: right; width: 20%; ">
		<img  width="100%" src="../Iconos/e.png">
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="transportadoresm.php" method="post">
				<div class="form-group">
					<label for=""><strong>INGRESE SU NOMBRE</strong></label>
					<input type="text" name="N" class="form-control">
					<label for=""><strong>INGRESE EL ID DEL TRANSPORTADOR A MODIFICAR</strong></label>
					<input type="text" name="I" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
					<label for=""><strong>INGRESE SU PLACA</strong></label>
					<input type="text" name="P" class="form-control">
					<label for=""><strong>GRADO DEL CERTIFICADO CON CERTIFICADO</strong></label>
					<select name="CI" class="form-control" >
						<?php
							While($row = pg_fetch_array ($result))
							{
								$codigo= $row["cod_certificacion"];
								$grado = $row["grado"];
								$tipo = $row["tipo"];
								echo "<option value=".$codigo.">".$grado.",".$tipo."</option>";
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