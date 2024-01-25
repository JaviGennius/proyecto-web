// Función para obtener la hora actual en formato HH:MM:SS
function obtenerHoraActual() {
    const ahora = new Date();
    const horas = ahora.getHours().toString().padStart(2, '0');
    const minutos = ahora.getMinutes().toString().padStart(2, '0');
    const segundos = ahora.getSeconds().toString().padStart(2, '0');
    return `${horas}:${minutos}:${segundos}`;
}

// Función para obtener la fecha actual en formato DD/MM/YYYY
function obtenerFechaActual() {
    const ahora = new Date();
    const dia = ahora.getDate().toString().padStart(2, '0');
    const mes = (ahora.getMonth() + 1).toString().padStart(2, '0'); // Se suma 1 porque los meses van de 0 a 11
    const anio = ahora.getFullYear();
    return `${dia}/${mes}/${anio}`;
}

// Función para actualizar el contenido de los elementos HTML con la hora y la fecha
function actualizarRelojYFecha() {
    document.getElementById('reloj').textContent = obtenerHoraActual();
    document.getElementById('fecha').textContent = obtenerFechaActual();
}

// Actualizar cada segundo
setInterval(actualizarRelojYFecha, 1000);

// Llamar a la función inicialmente para mostrar la hora y fecha inmediatamente
actualizarRelojYFecha();


//sacado y modificado varias veces en chatGPT...