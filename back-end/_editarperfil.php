<?php
session_start();
require("initdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar campos antes de procesar los datos
    $fecha = $_POST['fecha'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];

    // Validar fecha (formato YYYY-MM-DD)
    if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $fecha)) {
        header("Location: _editarperfil.php");
        exit();
    }

    // Validar teléfono (solo dígitos)
    if (!preg_match("/^\d+$/", $tel)) {
        header("Location: _editarperfil.php");
        exit();
    }

    // Validar correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        header("Location: _editarperfil.php");
        exit();
    }

    // Actualizar datos en la base de datos
    $actualizar = "UPDATE Pacientes SET Fecha_nacimiento=?, Telefono_paciente=?, Correo_paciente=? WHERE DNI_paciente=?";
    $updateStmt = $con->prepare($actualizar);
    $updateStmt->bind_param("ssss", $fecha, $tel, $correo, $_SESSION['dni_usuario']);
    $updateStmt->execute();
    $updateStmt->close();

    // Redirigir después de la actualización
    header("Location: portal_paciente.php");
    exit();
}

// Obtener datos actuales del paciente
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
    echo "<h4>" . $row['Nombre_paciente'] . $row['Primer_apellido_paciente'] . $row['Segundo_apellido_paciente'] . "</h4>";
    echo "<h5> Información Personal</h5>";
    echo "<label for='fecha'>Fecha de Nacimiento:</label>";
    echo "<input name='fecha' type='date' value='" . $row['Fecha_nacimiento'] ."'><br>";
    echo "<h5>Información de Contacto:</h5>";
    echo "<label for='tel'>Teléfono:</label>";
    echo "<input name='tel' type='text' value='" . $row['Telefono_paciente'] . "'><br>";
    echo "<label for='correo'>Correo:</label>";
    echo "<input name='correo' type='email' value='" . $row['Correo_paciente'] ."'><br>";
    echo "<input type='submit' value='Guardar Cambios'>";
    echo "</form>";
    echo "</div>";
}

$stmt->close();
$con->close();
?>
