<?php
include("Conexion.php");
$conn=conectarse();
$result=pg_query("select * from materiales_obra");
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
?>
<div class="container" style="width: 50%">
<TABLE class="table table-responsive table-warning"> 
      <tr  class="table-primary">
      	<strong>
      	<TD>&nbsp;CODIGO DEL MATERIAL</TD>
      	<TD>&nbsp;TIPO</TD>
      	<TD>&nbsp;MATERIAL DE FABRICACION</TD>
      	<TD>&nbsp;TAMAÑO</TD>
      	<TD>&nbsp;ACCIONES</TD>
      	</strong>
      </tr>
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$cod_material=$row1["0"];
											$tipo=$row1["1"];
											$material_fab=$row1["2"];
											$tamaño=$row1["3"];
	
											echo "<tr>";
											echo "<td >";
											echo $cod_material;
											echo "</td>";
											echo "<td >";
											echo $tipo;
											echo "</td>";
											echo "<td >";
											echo $material_fab;
											echo "</td>";
											echo "<td >";
											echo $tamaño;
											echo "</td>";
											if($_SESSION["tipo"] == "Administrador"){?>
												<td>
													<form action="eliminarm.php" method="post">
													<input type="hidden" name="C" value="<?php echo $cod_material; ?>">
													<button class="btn btn-danger btn-sm " type="submit">BORRAR</button>
												</form>
												<form action="mmateriales.php" method="post">
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