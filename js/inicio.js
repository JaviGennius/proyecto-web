//Funcion de Distorsión (Sacado de ChatGPT)
function distorsion(enlaces){
    document.querySelectorAll(".enlaces").forEach(function(imagenencima) {
    if (imagenencima !== enlaces ){
        
        imagenencima.classList.add("filtro_distorsionado")
    }
    });
}

function distorsion2(){
    document.querySelectorAll(".enlaces").forEach(function(imagen) {
        imagen.classList.remove("filtro_distorsionado")
});
}