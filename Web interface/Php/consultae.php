<?php
include("Conexion.php");
$conn=conectarse();
$result=pg_query("select e.nombres , e.apellidos , e.cedula , e.telefono, t.tipo, t.rh, e.celular, e.direccion, e.correo, ep.codigo_eps, e.salario, e.cargo, e.fecha_ingreso, e.tel_familiar, c.nombre  from empleados as e inner join ciudades as c on (e.cod_ciudad = c.cod_ciudad) inner join tipo_sanguineo as t on (e.cod_sanguineo = t.cod_sanguineo) inner join eps as ep on (e.cod_eps = ep.codigo_eps)");
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
?>
<div class="container">
<TABLE class="table table-responsive table-warning"> 
      <tr  class="table-primary">
      	<TD>&nbsp;NOMBRE</TD>
      	<TD>&nbsp;APELLIDOS</TD>
      	<TD>&nbsp;CEDULA</TD>
      	<TD>&nbsp;TELEFONO</TD>
      	<TD>&nbsp;TIPO DE SANGRE</TD>
      	<TD>&nbsp;RH DE SANGRE</TD>
      	<TD>&nbsp;CELULAR</TD>
      	<TD>&nbsp;DIRECCION</TD>
      	<TD>&nbsp;CORREO</TD>
      	<TD>&nbsp;EPS</TD>
      	<TD>&nbsp;SALARIO</TD>
      	<TD>&nbsp;CARGO</TD>
      	<TD>&nbsp;FECHA DE INGRESO</TD>
      	<TD>&nbsp;TELEFONO DE FAMILIAR</TD>
      	<TD>&nbsp;CIUDAD</TD>
      	<TD>&nbsp;ACCIONES</TD>

      </tr>
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$nombre=$row1["0"];
											$apellidos=$row1["1"];
											$cedula=$row1["2"];
											$telefono=$row1["3"];
											$cod_sanguineo=$row1["4"];
											$rh=$row1["5"];
											$celular=$row1["6"];
											$direccion=$row1["7"];
											$correo=$row1["8"];
											$eps=$row1["9"];
											$salario=$row1["10"];
											$cargo=$row1["11"];
											$fecha_ingreso=$row1["12"];
											$tel_familiar=$row1["13"];
											$ciudad=$row1["14"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $apellidos;
											echo "</td>";
											echo "<td >";
											echo $cedula;
											echo "</td>";
											echo "<td >";
											echo $telefono;
											echo "</td>";
											echo "<td >";
											echo $cod_sanguineo;
											echo "</td>";
											echo "<td >";
											echo $rh;
											echo "</td>";
											echo "<td >";
											echo $celular;
											echo "</td>";
											echo "<td >";
											echo $direccion;
											echo "</td>";
											echo "<td >";
											echo $correo;
											echo "</td>";
											echo "<td >";
											echo $eps;
											echo "</td>";
											echo "<td >";
											echo $salario;
											echo "</td>";
											echo "<td >";
											echo $cargo;
											echo "</td>";
											echo "<td >";
											echo $fecha_ingreso;
											echo "</td>";
											echo "<td >";
											echo $tel_familiar;
											echo "</td>";
											echo "<td >";
											echo $ciudad;
											echo "</td>";
											
											if($_SESSION["tipo"] == "Administrador"){?>
												<td>
													<form action="eliminare.php" method="post">
													<input type="hidden" name="C" value="<?php echo $cedula; ?>">
													<button class="btn btn-danger btn-sm " type="submit">BORRAR</button>
												</form>
												<form action="mempleados.php" method="post">
													<input type="hidden" name="C" value="<?php echo $cedula;?>">
													<button class="btn btn-primary btn-sm " type="submit">MODIFICAR</button>
												</form>
												</td>
											</tr>
													<?php  
								}
							}   

  pg_free_result($result); 
  pg_close($conn); 
?> 
</TABLE>
</div>
<?php 
hacer_pie();
?>