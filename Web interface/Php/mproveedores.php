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
		margin: 4% 10% ;
	}
</style>
	<div class="imagen" style="float: right; width: 20%; ">
		<img  width="100%" src="../Iconos/e.png">
	</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form action="proveedoresm.php" method="post">
				<div class="form-group">
					<label for=""><strong>INGRESE SU NOMBRE</strong></label>
					<input type="text" name="N" class="form-control">
					<label for=""><strong>INGRESE SU APELLIDO</strong></label>
					<input type="text" name="A" class="form-control">
					<label for=""><strong>INGRESE EL NIT DEL PROVEEDOR A MODIFICAR</strong></label>
					<input type="text" name="NI" class="form-control">
					<label for=""><strong>INGRESE SU DIRECCION</strong></label>
					<input type="text" name="D" class="form-control">
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