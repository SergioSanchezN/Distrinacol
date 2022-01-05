<?php
include("Conexion.php");
$conn=conectarse();
$result=pg_query("select c.nombres , c.direccion , c.cedula, c.telefono , ci.nombre, t.tipo, t.rh from cliente as c inner join ciudades as ci on (c.cod_ciudad = ci.cod_ciudad) inner join tipo_sanguineo as t on (c.cod_sanguineo = t.cod_sanguineo)");
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
?>
<div class="container">
<TABLE class="table table-responsive table-warning"> 
      <tr class="table-primary">
      	<td scope="col">&nbsp;NOMBRE</TD>
      	<TD>&nbsp;DIRECCION</TD>
      	<TD>&nbsp;CEDULA</TD>
      	<TD>&nbsp;TELEFONO</TD>
      	<TD>&nbsp;CIUDAD</TD>
      	<TD>&nbsp;TIPO DE SANGRE</TD>
      	<TD>&nbsp;RH DE SANGRE&nbsp;</TD>
      	<TD>&nbsp;ACCIONES</TD>
      </tr>
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$nombre=$row1["0"];
											$direccion=$row1["1"];
											$cedula=$row1["2"];
											$telefono=$row1["3"];
											$cod_ciudad=$row1["4"];
											$cod_sanguineo=$row1["5"];
											$rh=$row1["6"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $direccion;
											echo "</td>";
											echo "<td >";
											echo $cedula;
											echo "</td>";
											echo "<td >";
											echo $telefono;
											echo "</td>";
											echo "<td >";
											echo $cod_ciudad;
											echo "</td>";
											echo "<td >";
											echo $cod_sanguineo;
											echo "</td>";
											echo "<td >";
											echo $rh;
											echo "</td>";	 
							if($_SESSION["tipo"] == "Administrador"){?>
												<td>
													<form action="eliminarc.php" method="post">
													<input type="hidden" name="CE" value="<?php echo $cedula;?>">
													<button class="btn btn-danger btn-sm " type="submit">BORRAR</button>
												</form>
												<form action="mclientes.php" method="post">
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
