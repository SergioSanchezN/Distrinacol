<?php 
include "encabezado.php";
hacer_encabezado();
 ?>
	<div class="container my-3">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<?php 
					if (isset($_GET["estado"])) {
						if ($_GET["estado"] == "correcto") {
							echo "El usuario se a registrado satisfactoriamente";
						}
					}
					 ?>
					<div class="card-header text-center"><strong>REGISTRO</strong></div>
					<div class="card-body">
						<form action="fregistrar.php" method="post">
							<strong>USUARIO</strong>
							<input class="form-control" type="text" name="u" >
							<strong>CORREO ELECTRONICO</strong>
							<input class="form-control" type="text" name="c" onChange="validarEmail1(this.value);" >
							<strong>TIPO DE USUARIO</strong>
							<select class="form-control" type="text" name="t" >
								<OPTION VALUE="Administrador">Administrador
								<OPTION VALUE="Empleado">Empleado
							</select>
							<strong>CONTRASEÑA</strong>
							<input class="form-control" type="password" name="co" >
							<div class="text-center mt-3">
								<a href="login.php"><input class="btn btn-primary" type="button" value="Atras"></a>
								<input class="btn btn-primary" type="submit" value="Registrarse">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
hacer_pie();
 ?>