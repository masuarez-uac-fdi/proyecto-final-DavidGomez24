$(function(){
	var v=1;
		$('html').keydown(function(e){
			if (e.keyCode==38) {
				v++;
				console.log(v);
				
				
			}	
			else if (e.keyCode==40) {
				console.log("bajo");
			}
			else if (e.keyCode==39) {
				console.log("derecha");
			}
			else if (e.keyCode==37) {
				console.log("izquierda");
			}
		});
	});