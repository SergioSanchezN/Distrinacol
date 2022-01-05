<?php
include("Conexion.php");
$conn=conectarse();
include("encabezado1.php");
hacer_encabezado(); 
?>
<div class="container my-3">
	<div class="card mb-3">
  <img src="../Iconos/pf.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PERFIL Y NUESTRA HISTORIA</h5>
    <p class="card-text">CONSTRUCCIONES HIDRAULICAS PARRADO S.A.S. es una compañia que presta el servicio de consultoria y construccion de redes hiraulicas, sanitarias, acueductos, alcantarillados, de gas y de extincion de incendios a base de agua con rociadores automaticos y conexiones de manguera y para bombeos, en cumplimiento con la normatividad nacional e internacional vigente, para edificaciones residenciales, comerciales, institucionales e industriales a nivel nacional.</p>
  </div>
</div>
<?php 
hacer_pie();
?>