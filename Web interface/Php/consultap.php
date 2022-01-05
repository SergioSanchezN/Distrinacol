<?php
include("Conexion.php");
$conn=conectarse();
$result=pg_query("select * from proveedores");
?>
<?php
include("encabezado1.php");
hacer_encabezado(); 
?>
<div class="container" style="width: 50%">
<TABLE class="table table-responsive table-warning"> 
      <tr  class="table-primary">
      	<strong>
      	<TD>&nbsp;NOMBRE</TD>
      	<TD>&nbsp;APELLIDOS</TD>
      	<TD>&nbsp;NIT</TD>
      	<TD>&nbsp;DIRECCION</TD>
      	<TD>&nbsp;ACCIONES</TD>
      	</strong>
      </tr>
	  
<?PHP     
					while ($row1=pg_fetch_array($result)) 
							{ 
											$nombre=$row1["0"];
											$apellidos=$row1["1"];
											$nit=$row1["2"];
											$direccion=$row1["3"];
	
											echo "<tr>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $apellidos;
											echo "</td>";
											echo "<td >";
											echo $nit;
											echo "</td>";
											echo "<td >";
											echo $direccion;
											echo "</td>";	 
							if($_SESSION["tipo"] == "Administrador"){?>
												<td>
													<form action="eliminarp.php" method="post">
													<input type="hidden" name="NI" value="<?php echo $nit; ?>">
													<button class="btn btn-danger btn-sm " type="submit">BORRAR</button>
												</form>
													<form action="mproveedores.php" method="post">
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