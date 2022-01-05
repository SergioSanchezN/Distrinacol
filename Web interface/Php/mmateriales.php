<?php
include("Conexion.php");
$conn=conectarse();
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
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
			<form action="materialesm.php" method="post">
				<div class="form-group">
					<label for=""><strong>INGRESE EL CODIGO DEL MATERIAL A MODIFICAR</strong></label>
					<input type="text" name="C" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
					<label for=""><strong>INGRESE EL TIPO DEL MATERIAL</strong></label>
					<SELECT NAME="T" class="form-control"> 
						<OPTION VALUE="Cementos Y Arena">Cementos Y Arena
						<OPTION VALUE="Tuberia">Tuberia
						<OPTION VALUE="Alcantarillado">Alcantarillado
						<OPTION VALUE="Pegamentos">Pegamentos
						<OPTION VALUE="Laminados">Laminados
					</SELECT>
					<label for=""><strong>INGRESE EL MATERIAL DE FABRICACION</strong></label>
					<input type="text" name="MF" class="form-control">
					<label for=""><strong>INGRESE EL TAMAÑO EN METROS</strong></label>
					<input type="text" name="TA" class="form-control" onKeyPress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
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