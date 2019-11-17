
		$('#submit').click(function(){
			
			login();
			
			});
		$('body').keyup(function(e) {
		    if(e.keyCode == 13) {
		        login();
		    }
		});

function login(){

			var usuario=$('#user').val();
			var Contrasena= $('#password').val() ;
			var datos={'user':usuario,'password':Contrasena};
			//console.log("usuario: "+ datos['user'] + " -- password: "+ datos['password']);
			$.ajax({
				url:'app/login.php',
				type:'POST',
				data:datos
				}).done(function(respuesta){

					
					if (respuesta=="successful") {
						//console.log("usuario valido");
						window.location="session.php";
						
					}else{
						//console.log("error usuario no valido");
					}

				});

}