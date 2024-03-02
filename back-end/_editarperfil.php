<?php
$estilos = "<link href='../css/edita.css' rel='stylesheet'/>";
require("_header.php");
session_start();
require("initdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $actualizar = "UPDATE Pacientes SET Fecha_nacimiento=?, Telefono_paciente=?, Correo_paciente=? WHERE DNI_paciente=?";
    $updateStmt = $con->prepare($actualizar);
    $updateStmt->bind_param("ssss", $_POST['fecha'], $_POST['tel'], $_POST['correo'], $_SESSION['dni_usuario']);
    $updateStmt->execute();
    $updateStmt->close();

    header("Location: portal_paciente.php");
    exit();
}

$consulta = "SELECT DNI_paciente, Num_Historial, Nombre_paciente, Primer_apellido_paciente, Segundo_apellido_paciente, Fecha_nacimiento, Sexo, Telefono_paciente, Correo_paciente, Foto_usuario FROM Pacientes WHERE DNI_paciente = ?";
$stmt = $con->prepare($consulta);
$stmt->bind_param("s", $_SESSION['dni_usuario']);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<div class='informacion'>";
    echo "<form method='post' enctype='multipart/form-data'>";
    echo "<div>";
    echo "<img id='foto' src='" . $row['Foto_usuario'] . "' class='perfil' draggable='false'><br>";
    echo "</div>";
    echo "<br>";
    echo "<h4>" . $row['Nombre_paciente'] ." " . $row['Primer_apellido_paciente'] . " " . $row['Segundo_apellido_paciente'] . "</h4>";
    echo "<h5> Información Personal</h5>";
    echo "<p><label for='fecha'>Fecha de Nacimiento:</label>";
    echo "<input name='fecha' type='date' value='" . $row['Fecha_nacimiento'] ."'</p><br>";
    echo "<h5>Información de Contacto:</h5>";
    echo "<p><label for='tel'>Teléfono:</label>";
    echo "<input name='tel' type='text' value='" . $row['Telefono_paciente'] . "'</p><br>";
    echo "<p><label for='correo'>Correo:</label>";
    echo "<input name='correo' type='email' value='" . $row['Correo_paciente'] ."'</p><br><br>";
    echo "<input type='submit' value='Guardar Cambios'>";
    echo "<a href='portal_paciente.php'><input type='button' name='volver' value='Volver Sin Cambios'></a>";
    echo "</form>";
    echo "</div>";
}

$stmt->close();
$con->close();
?>


