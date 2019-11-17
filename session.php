<?php
require('app/validationSession.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style-session.css">
</head>
<body>
	<div class="container-fluid gen1">
  <br>
  <div id="welcome" class="h3"></div>
	<p>En este momento has iniciado sesion, desde aqui podras validad y modificar todos tu datos <br> Tambien podras agregar y eliminar juegos de ti cuenta. <strong> Nota: </strong> una ve eliminado un juego, se perdera todo el progreso.</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand i-link" href="session.php" id="start"> Inicio </a>
  <ul class="navbar-nav" >
    <li class="nav-item">
      <a class="nav-link i-link" id="session-data" href="#"> Datos </a>
    </li>
    <li class="nav-item">
      <a class="nav-link i-link" href="#" id="juegos"> Juegos </a>
    </li>
    <li class="nav-item">
      <button type="button" class="btn btn-success" id="submit">Cerrar sesion</button>
    </li>
  </ul>
</nav>

<div id="container-menu" class="container gen2"><br>

</div>



	</div>
	<script type="text/javascript" src="js/session-js.js"></script>



<footer class="page-footer font-small container">

  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#" class="i-link"> gamezone.com </a>
  </div>

</footer>



</body>
</html>
