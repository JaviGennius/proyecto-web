function validarDNI() {
    let dni=document.getElementById("dni");
    let dniValor = dni.value.trim();
    let errorDNI=document.getElementById("error_dni");
    let dni_correcto = /^[0-9]{8}[A-Za-z]$/;
    if (!dni_correcto.test(dniValor) || dniValor === "") {
        errorDNI.style.display = "block";
        dni.style.borderColor = "red";
        return false;
    } else {
        errorDNI.style.display = "none";
        dni.style.borderColor = "green";
        return true;
    }
}

function validarNombre() {
    let nombre = document.getElementById("nombre");
    let nombreValor = nombre.value.trim();
    let errorNombre = document.getElementById("error_nombre");
    if (nombreValor === "") {
        errorNombre.style.display = "block";
        nombre.style.borderColor = "red";
        return false;
    } else {
        errorNombre.style.display = "none";
        nombre.style.borderColor = "green";
        return true;
    }
}

function validarPrimerApellido() {
    var primero=document.getElementById("primero");
    var primeroValor = primero.value.trim();
    var errorApellido1=document.getElementById("error_apellido1");

    if (primeroValor === "") {
        errorApellido1.style.display = "block";
        primero.style.borderColor = "red";
        return false;
    } else {
        errorApellido1.style.display = "none";
        primero.style.borderColor = "green";
        return true;
    }
}


function validarSegundoApellido() {
    var segundo = document.getElementById("segundo");
    var segundoValor = segundo.value.trim();
    var errorApellido2 = document.getElementById("error_apellido2");
    errorApellido2.setAttribute("hidden",true);
    if (segundoValor === "") {
        errorApellido2.style.display = "block";
        segundo.style.borderColor = "red";
        return false;
    } else {
        errorApellido2.style.display = "none";
        segundo.style.borderColor = "green";
        return true;
    }
}

function validarFechaNacimiento() {
    var dia = document.getElementById("dia").value;
    var mes = document.getElementById("mes").value;
    var ano = document.getElementById("ano").value;
    var diaElement = document.getElementById("dia");
    var mesElement = document.getElementById("mes");
    var anoElement = document.getElementById("ano");
    var errorEdad = document.getElementById("error_edad");

    if (dia === "" || mes === "" || ano === "" || ano < 1950) {
        errorEdad.style.display = "block";
        diaElement.style.borderColor = "red";
        mesElement.style.borderColor = "red";
        anoElement.style.borderColor = "red";
        return false;
    } else {
        errorEdad.style.display = "none";
        diaElement.style.borderColor = "green";
        mesElement.style.borderColor = "green";
        anoElement.style.borderColor = "green";
        return true;
    }
}

function validarSexo() {
    var sexo = document.getElementById("sexo");
    var errorSexo = document.getElementById("error_sexo");
    if (sexo.value === "") {
        errorSexo.style.display = "block";
        sexo.style.borderColor = "red";
        return false;
    } else {
        errorSexo.style.display = "none";
        sexo.style.borderColor = "green";
        return true;
    }
}


function validarTelefono() {
    var telefonoInput = document.getElementById("telefono");
    var telefono = telefonoInput.value;
    var telefonoRegex = /^\d+$/;
    var errorTelefono = document.getElementById("error_tel");
    
    if (telefono === "" || !telefonoRegex.test(telefono)) {
        errorTelefono.style.display = "block";
        telefonoInput.style.borderColor = "red";
        return false;
    } else {
        errorTelefono.style.display = "none";
        telefonoInput.style.borderColor = "green";
        return true;
    }
}

function validarEmail() {
    var emailInput = document.getElementById("email");
    var email = emailInput.value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var errorEmail = document.getElementById("error_email");
    
    if (email === "" || !emailRegex.test(email)) {
        errorEmail.style.display = "block";
        emailInput.style.borderColor = "red";
        return false;
    } else {
        errorEmail.style.display = "none";
        emailInput.style.borderColor = "green";
        return true;
    }
}

function validarContrasena() {
    let contrasena=document.getElementById("contrasena");
    let contrasenaValor = contrasena.value.trim();
    let error_contrasena=document.getElementById("error_contrasena");
    let expresionRegular = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{3,16}$/;

    if (expresionRegular.test(contrasena) || contrasenaValor === "") {
        error_contrasena.style.display = "block";
        contrasena.style.borderColor = "red";
        return true;
    } else {
        error_contrasena.style.display = "none";
        contrasena.style.borderColor = "green";
        return false;
    }
}

function validarContrasena() {
    let contrasena=document.getElementById("contrasena");

    let error_contrasena=document.getElementById("error_contrasena");
    
    let contrasenaValor = contrasena.value.trim();
    let contraseña_correcta = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{1,16}$/;
    console.log("Contraseña:", contrasenaValor);
console.log("Prueba de la expresión regular:", contraseña_correcta.test(contrasenaValor));

    if (!contraseña_correcta.test(contrasenaValor) || contrasenaValor === "") {
        error_contrasena.style.display = "block";
        contrasena.style.borderColor = "red";
        return false;
    } else{
        error_contrasena.style.display = "none";
        contrasena.style.borderColor = "green";
        return true;
    }
}

function validarContrasenaVeficada(){
    let error_contrasena_verificada = document.getElementById("error_contrasena_verificada");
    let contrasena=document.getElementById("contrasena");
    let contrasena_verific=document.getElementById("contrasena_verific");
    
    let contrasenaValor = contrasena.value.trim();
    let contrasena_verificValor = contrasena_verific.value.trim();

    if (contrasena_verificValor === "" || contrasena_verificValor  !== contrasenaValor) {
        error_contrasena_verificada.style.display = "block";
        contrasena_verific.style.borderColor = "red";    
        return false;
    } else {
        error_contrasena_verificada.style.display = "none";
        contrasena_verific.style.borderColor = "green";
        return true;
    }
}


function validarFormulario() {
    let esNombreValido = validarNombre();
    let esPrimerApellidoValido = validarPrimerApellido();
    let esSegundoApellidoValido = validarSegundoApellido();
    let esFechaNacimientoValida = validarFechaNacimiento();
    let esSexoValido = validarSexo();
    let esTelefonoValido = validarTelefono();
    let esEmailValido = validarEmail();
    let esDNI = validarDNI();
    let esContrasena = validarContrasena()
    let esVerificarContrasena = validarContrasenaVeficada()

    if (esDNI && esNombreValido && esPrimerApellidoValido && esSegundoApellidoValido && esFechaNacimientoValida && esSexoValido && esTelefonoValido && esEmailValido && esContrasena && esVerificarContrasena) {
        setTimeout(function() {
            window.location.href = '../index.html'; // Funcion sacada de Chatgpt
        }, 3000);
        document.getElementById("patientForm").style.display = "none";
        document.getElementById("cabecera").style.display = "none";
        document.getElementById("cargar").style.display = "block";
    } else {
        alert("Por favor, complete todos los campos correctamente.");
    }
}

document.getElementById("dni").addEventListener("blur", validarDNI);
document.getElementById("nombre").addEventListener("blur", validarNombre);
document.getElementById("primero").addEventListener("blur", validarPrimerApellido);
document.getElementById("segundo").addEventListener("blur", validarSegundoApellido);
document.getElementById("dia").addEventListener("blur", validarFechaNacimiento);
document.getElementById("mes").addEventListener("blur", validarFechaNacimiento);
document.getElementById("ano").addEventListener("blur", validarFechaNacimiento);
document.getElementById("sexo").addEventListener("blur", validarSexo);
document.getElementById("telefono").addEventListener("blur", validarTelefono);
document.getElementById("email").addEventListener("blur", validarEmail);
document.getElementById("contrasena").addEventListener("blur", validarContrasena);
document.getElementById("contrasena_verific").addEventListener("blur", validarContrasenaVeficada);
document.getElementById("submitButton").addEventListener("click", validarFormulario);
