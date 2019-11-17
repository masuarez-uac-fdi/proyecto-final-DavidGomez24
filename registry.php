<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style-registry.css">
	<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container justify-content-center ">
		<div class="col-8 conten text-center">
			<div class="row col-12">

					<label class="col-3"><strong>Nombre</strong></label>
					<input class="col-3" type="input" id="firstName">

					<label class="col-3"><strong>Apellido</strong></label>
					<input class="col-3" type="input" id="lastName">

			</div>


			<div class="row col-12">

					<label class="col-3"><strong>Correo</strong></label>
					<input class="col-3" type="input" id="email">

					<label class="col-3"><strong>Fecha de Nacimiento</strong></label>
					<input class="col-3" type="Date" id="age">

		</div>

		<div class="row col-12">

					<label class="col-3"><strong>Telefono</strong></label>
					<input  class="col-3" type="input" id="mobile">

					<label class="col-3"><strong>Contraseña</strong></label>
					<input class="col-3" type="password" id="pass">

			</div>
			<div class="row col-8 c-btn">
				<button id="registrar" type="button" class="btn btn-success col-3" >Registrar</button>
				<button id="inicio" type="button" class="btn btn-primary col-3" >Regresar</button>
			</div>
	</div>

	<script type="text/javascript" src="js/registry.js"></script>


</body>
</html>
