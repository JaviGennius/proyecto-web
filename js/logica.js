function validarDNI() {
    let dni=document.getElementById("dni");
    let dniValor = dni.value.toUpperCase();
    let dni_correcto = /^[0-9]{8}[A-Za-z]$/;
    if (!dni_correcto.test(dniValor) || dniValor === "") {
        dni.style.borderColor = "red";
        return false;
    } else {
        dni.style.borderColor = "green";
        return true;
    }
}
function validarContrasena() {
    let contrasena=document.getElementById("contraseña");
    
    let contrasenaValor = contrasena.value.trim();
    let contraseña_correcta = /^(?=.*\d)(?=.*[a-zA-Z]).{3,16}$/;

    if (!contraseña_correcta.test(contrasenaValor) || contrasenaValor === "") {
        contrasena.style.borderColor = "red";
        return false;
    } else{
        contrasena.style.borderColor = "green";
        return true;
    }
}

function validarFormulario() {
    let esDNI = validarDNI();
    let esContrasena = validarContrasena();
    if (!esDNI && !esContrasena) {
        alert("Por favor, complete todos los campos correctamente.");
    }
}

document.getElementById("dni").addEventListener("blur", validarDNI);
document.getElementById("contraseña").addEventListener("blur", validarContrasena);
document.getElementById("botonsubmit").addEventListener("click", validarFormulario);