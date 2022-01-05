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
  <title>'.$titulo.'</title>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/vali.js"></script>
</head>
<body>
  <header>
  <div style="background: #E5F4EE;">
    <div class="a">
      <img src="../iconos/portada.png" width="140px">
  </div>
  </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #FA8F30;">
  <a class="navbar-brand" href="../test.html">MENU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
         <li class="nav-item">
        <a class="nav-link" href="qss.php">CONOCENOS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NUESTRAS REDES</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="https://www.facebook.com/">FACEBOOK</a>
          <a class="dropdown-item" href="https://www.instagram.com/">INSTAGRAM</a>
        </div>
        <li class="nav-item">
        <a class="nav-link" href="login.php">INICIAR SESION</a>
      </li>
    </ul>
  </div>
</nav>
  </header>
<section style="background-image:url(../Iconos/fo.jpg); background-repeat:no-repeat; background-attachment: fixed; background-size: 100% 100%; ">';
}


function hacer_pie()
{
    echo '
    </section>
      <footer>
    <div>
      <strong>TODOS LOS DRECHOS RESERVADOS 2019</strong>
    </div>
  </footer>
    </body>
    </html>';
}

?>
