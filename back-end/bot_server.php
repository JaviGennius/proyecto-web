<?php require("initdb.php");

// Recibe la entrada del usuario desde la solicitud POST
$data = json_decode(file_get_contents('php://input'), true);
$userMessage = $data['userMessage'];

// Realiza la consulta en la base de datos
$query = "SELECT respuesta FROM chatbot WHERE pregunta = ?";
$statement = $conexion->prepare($query);
$statement->bind_param("s", $userMessage);
$statement->execute();
$result = $statement->get_result();

// Construye la respuesta JSON
if ($row = $result->fetch_assoc()) {
    $botResponse = $row['respuesta'];
} else {
    $botResponse = 'Lo siento, no entiendo lo que dices.';
}

echo json_encode(['botResponse' => $botResponse]);

// Cierra la conexión a la base de datos
$statement->close();
$conexion->close();
?>
