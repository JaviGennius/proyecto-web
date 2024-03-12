//Funcion que activa el menu hamburguesa para abrirlo y cerrarlo
let menuToggle = document.querySelector('.menuToggle');
let navegador = document.querySelector('.navegador');
menuToggle.onclick = function(){// Asigna una función al evento 'onclick' del elemento menuToggle que activa el menu hamburguesa 
    navegador.classList.toggle('active');

}

const imgcompletacaja = document.getElementById("imgcompletacaja");
imgcompleta = document.getElementById("imgcompleta");

function abririmagen(reference){
imgcompletacaja.style.display ="flex";
imgcompleta.src = reference
}

function cerrarImagen(){
imgcompletacaja.style.display = "none";
}

// menu hamburguesa:https://www.youtube.com/watch?v=samof05Dy6A&t=846s
// galeria de imagenes:https://www.youtube.com/watch?v=3vn6JubwmCs
