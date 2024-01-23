function enviar_formulario(event) {
    event.preventDefault();

    const nombre_de_usuario = document.getElementById("nombre_de_usuario");
    const dni = document.getElementById("dni");
    const contraseña = document.getElementById("contraseña");

    const nombre_de_usuario_correcto = validar_campo(nombre_de_usuario, /^[a-zA-Z\s]+$/);
    const dni_correcto = validar_campo(dni, /^[0-9]{8}[A-Za-z]$/);
    const contraseña_correcta = validar_campo(contraseña, /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/);

    mostrar_resultado_correcto(nombre_de_usuario, nombre_de_usuario_correcto);
    mostrar_resultado_correcto(dni, dni_correcto);
    mostrar_resultado_correcto(contraseña, contraseña_correcta);

    if (nombre_de_usuario_correcto && dni_correcto && contraseña_correcta) {
        alert("Formulario enviado");
    }
}

function validarCampo(input, regex, campo) {
    const correcto = regex.test(input.value);

    if (correcto) {
        input.classList.remove("incorrecto");
        input.classList.add("correcto");
    } else {
        input.classList.remove("correcto");
        input.classList.add("incorrecto");
    }

    mostrar_resultado_correcto(input, correcto, campo);
}

function validar_campo(input, regex) {
    const correcto = regex.test(input.value);

    if (correcto) {
        input.classList.remove("incorrecto");
        input.classList.add("correcto");
    } else {
        input.classList.remove("correcto");
        input.classList.add("incorrecto");
    }

    return correcto;
}

function mostrar_resultado_correcto(input, correcto, campo) {
    
    const etiqueta = input.parentNode.querySelector(".validar-icono");
    if (etiqueta) {
        input.parentNode.removeChild(etiqueta);
    }

    
    const icono = document.createElement("span");
    icono.className = correcto ? "icono correcto" : "icono incorrecto";
    icono.title = correcto ? `${campo} correcto` : `${campo} incorrecto`;
    input.parentNode.appendChild(icono);
}
