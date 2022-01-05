<?php
include("Conexion.php");
$conn=conectarse();
$result=pg_query("select t.nombre, t.id, t.placa, c.tipo , c.grado , c.fecha_expiracion
from transportadores as t
inner join certificaciones as c
on(t.cod_certificacion = c.cod_certificacion)");
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
?>
<div class="container" style="width: 80%">
<TABLE class="table table-responsive table-warning"> 
      <tr  class="table-primary">
      	<strong>
      	<TD>&nbsp;NOMBRE</TD>
      	<TD>&nbsp;ID</TD>
      	<TD>&nbsp;PLACA</TD>
      	<TD>&nbsp;TIPO DE CERTIFICACION</TD>
      	<TD>&nbsp;GRADO DE LA CERTIFICACION</TD>
      	<TD>&nbsp;FECHA DE EXPIRACION DE LA CERTIFICACION</TD>
      	<TD>&nbsp;ACCIONES</TD>
      	</strong>
      </tr>
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$nombre=$row1["0"];
											$id=$row1["1"];
											$placa=$row1["2"];
											$tipo=$row1["3"];
											$grado=$row1["4"];
											$fecha_expiracion=$row1["5"];
	
											echo "<tr>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $id;
											echo "</td>";
											echo "<td >";
											echo $placa;
											echo "</td>";
											echo "<td >";
											echo $tipo;
											echo "</td>";
											echo "<td >";
											echo $grado;
											echo "</td>";
											echo "<td >";
											echo $fecha_expiracion;
											echo "</td>";

 
							if($_SESSION["tipo"] == "Administrador"){?>
												<td>
													<form action="eliminart.php" method="post">
													<input type="hidden" name="I" value="<?php echo $id; ?>">
													<button class="btn btn-danger btn-sm " type="submit">BORRAR</button>
												</form>
												<form action="mtransportadores.php" method="post">
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