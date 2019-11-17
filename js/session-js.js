
		$('.i-link').click(function(e){
			 e.preventDefault();
		});

		$.ajax({
				url:'Start.html'
				}).done(function(result){

					$('#container-menu').html(result);
				});

		$('#submit').click(function(){
			
			$.ajax({
				url:'app/signOff.php'
				}).done(function(){
					window.location="index.php";
				});

			});

		$(document).ready(function(){
			$.ajax({
				url:'app/sessionData.php'
				}).done(function(res){
					respuesta=JSON.parse(res);
					$('#welcome').text("Bienvenido "+ respuesta['firstName'] +" "+ respuesta['lastName']);
				});

			});
		$('#session-data').click(function(){


			$.ajax({
				url:'Datos.html'
				}).done(function(result){

					$('#container-menu').html(result);
				});

			});


		$('#start').click(function(){


			$.ajax({
				url:'Start.html'
				}).done(function(result){

					$('#container-menu').html(result);
				});

			});


		$('#juegos').click(function(){


			$.ajax({
				url:'Juegos.html'
				}).done(function(result){

					$('#container-menu').html(result);
				});

			});
