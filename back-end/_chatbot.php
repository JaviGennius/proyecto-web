<!-- https://www.youtube.com/watch?v=757WTYQxVmc&t=231s&ab_channel=MauricioSevillaBritto -->
<?php
require("initdb.php");

// obteniendo el mensaje del usuario a través de ajax
$getMesg = mysqli_real_escape_string($con, $_POST['text']);

//comprobando la consulta del usuario a la consulta de la base de datos
$check_data = "SELECT respuesta FROM chatbot WHERE pregunta LIKE '%$getMesg%'";
$run_query = mysqli_query($con, $check_data);

// si la consulta del usuario coincide con la consulta de la base de datos, mostraremos la respuesta; de lo contrario, irá a otra declaración
if (mysqli_num_rows($run_query) > 0) {
    //recuperando la reproducción de la base de datos de acuerdo con la consulta del usuario
    $fetch_data = mysqli_fetch_assoc($run_query);
    //almacenando la respuesta a una variable que enviaremos a ajax
    $replay = $fetch_data['respuesta'];
    echo $replay;
} else {
    echo "¡Lo siento, no puedo ayudarte con este inconveniente!";
}