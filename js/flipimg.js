let  fotomedico = "delante";
function flip() {
    let imagen = document.getElementById("medico");
    if (fotomedico =="delante"){
        imagen.src = "../imagenes/c2.d.png";
        fotomedico ="detras"
    }
    else {
        imagen.src ="../imagenes/cardiolog1.jpg";
        fotomedico ="delante"
    }

}
function flipout(){
    let imagen = document.getElementById("medico");
    
        imagen.src ="../imagenes/cardiolog1.jpg";
        fotomedico ="delante"
    }
    