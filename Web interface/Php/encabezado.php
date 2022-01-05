<?PHP
function hacer_encabezado($titulo = "CONSTRUCCIONES HIDRAULICAS PARRADO S.A.S.")
{
    echo '   
<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>'. $titulo .'</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
      <script src="../js/validaciones.js"></script>
      <script src="../js/vali.js"></script>
</head>
<body>
    <header>
          <div style="background: #E5F4EE;">
    <div class="a">
      <img src="../iconos/portada.png" width="140px">
  </div>
  </div>
  <nav style="background-color:#E5F4EE; "></nav>
  </header>
    <section style="background-image:url(../Iconos/fo.jpg); background-repeat:no-repeat; background-attachment: fixed; background-size: 100% 100%; ">';
}


function hacer_pie()
{
    echo '
    </section>
<footer class="page-footer font-small blue" style="position: absolute; bottom: 0; width: 100%; height: 40px;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="../test.html"> CHP_SAS.com</a>
  </div>
  <!-- Copyright -->

</footer>
    </body>
    </html>';
}

?>
