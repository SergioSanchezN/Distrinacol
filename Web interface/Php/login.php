<?php 
include "encabezado.php";
hacer_encabezado();
 ?>
<body>
	<div class="container my-3">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<?php 
					if (isset($_GET["estado"])) {
						if ($_GET["estado"] == "error") {
							echo "Credenciales incorrectas";
						}
					}
					 ?>
					<div class="card-header text-center"><strong>Login</strong></div>
					<div class="card-body">
						<form action="entrar.php" method="post">
							<strong>USUARIO</strong>
							<input class="form-control" type="text" name="u" >
							<strong>CONTRASEÑA</strong>
							<input class="form-control" type="password" name="co" >
							<div class="text-center mt-3">
								<input class="btn btn-primary" type="submit" value="Entrar">
								<a href="registrar.php"><input class="btn btn-primary" type="button" value="Registrese"></a>
								<a href="../test.html"><input class="btn btn-primary" type="button" value="atras"></a>
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