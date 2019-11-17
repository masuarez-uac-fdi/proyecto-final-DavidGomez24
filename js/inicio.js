document.addEventListener('DOMContentLoaded',function(){
	
	inicio.iniciarJuego();


},false);

var inicio={
	iniciarJuego:function(){
		ajax.cargarArchivo("mapas/MapaPrincipal.json");
		teclado.iniciar();
		dimenciones.iniciar();
		//inicio.recargarTiles();
		buclePrincipal.iterar();


	},
	recargarTiles:function(){

		document.getElementById("juego").innerHTML="";
		for (var y = 0; y < dimenciones.obtenerTilesVerticales(); y++) {
			for (var x = 0; x < dimenciones.obtenerTilesHorizontales(); x++) {
				var r=new Rectangulo(x*dimenciones.ladoTiles,y*dimenciones.ladoTiles,dimenciones.ladoTiles,
					dimenciones.ladoTiles);
			}
		}

	}
};