    let fotoMostrada = "delante";
function cambioImagen() {
    let imagen = document.getElementById("foto");
   if(fotoMostrada == "delante"){
    imagen.src = "../imagenes/detras.png";
    fotoMostrada = "detras"
    
   }
   else{
    imagen.src = "../imagenes/delante.png";
    fotoMostrada = "delante"
   }
}