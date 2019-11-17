

	$('#changeData').click(function(){

		var email=$('#email').val();
		var mobile= $('#mobile').val() ;
		var datos={'email':email ,'mobile':mobile};

		$.ajax({
				url:'app/changeData.php',
				type:'POST',
				data:datos
				}).done(function(res){
					//respuesta=JSON.parse(res);

					if (res=="successful") {
						                    alert("Datos Modificados");
											}else{
											alert("Error al Intentar Cambiar Datos");
											}

									});


				});

	$('#changePassword').click(function(){
			var currentPassword=$('#currentPassword').val();
			var newPassword= $('#newPassword').val() ;
			var repeatNewPassword= $('#repeatNewPassword').val() ;

			if ((newPassword == repeatNewPassword )&& (newPassword.length >= 5)) {

			var datos={'password':currentPassword ,'newPassword':newPassword};
						$.ajax({
								url:'app/changePassword.php',
								type:'POST',
								data:datos
								}).done(function(res){
									//respuesta=JSON.parse(res);
									if (res=="successful") {
										alert("Contraseña cambiada");
									}else{
										alert("Error al cambiar contraseña");
									}

								});
								$('#currentPassword').val("");
								$('#newPassword').val("") ;
								$('#repeatNewPassword').val("") ;

					}else
					{
						alert("Las contraseña actual no es valida o las nuevas no coinsiden");
						$('#currentPassword').val("");
						$('#newPassword').val("") ;
						$('#repeatNewPassword').val("") ;
					}
	});




	$('#deleteUser').click(function(){

		var mensaje = confirm("¿Estas seguro(a) que deseas eliminar tu cuenta? (Una vez confirmado no podra restablecer la cuenta)");

		if (mensaje) {
			$.ajax({
					url:'app/deleteUser.php'
					}).done(function(res){
						//respuesta=JSON.parse(res);

						if (res=="successful") {
												alert("Se ha eliminado la cuenta");
												window.location="index.php";
												}else{
												alert("Error al procesar la peticion ");
												}

										});
		}else{
			alert("Has cancelado la peticion, La cuenta permanece activa");
		}



				});





	$(document).ready(function(){
		$.ajax({
				url:'app/allData.php'
				}).done(function(res){
					//respuesta=JSON.parse(res);
					$('#email').val(res["email"]);
					$('#mobile').val(res["mobile"]);

				});

	});
