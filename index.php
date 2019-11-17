<?php
require('app/validationIndex.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Game Zone</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style-index.css">
</head>
<body>
	
	<div class="modal-dialog text-center" >
		<div class="col-8 main-section">
			
			<div class="modal-content">
			
				<div class="col-12">
					<img class="logo-form" src="img/logo1.png">
				</div>
				<form class="col-12">
					<div class="form-group">
						<input type="text" id="user" class="form-control" placeholder="Nombre de Usuario">
					</div>
					<div class="form-group">
						<input type="password" id="password" class="form-control" placeholder="Contraseña">
					</div>
					<button type="button" id="submit" class="btn"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
					<div class="col-12 forgot">
						<a href="registry.php">Aun no tengo cuenta</a>
					</div>
					
				</form>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/login.js"></script>

</body>
</html>