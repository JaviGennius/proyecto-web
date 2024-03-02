<div class="carrusel">
<?php
session_start();
require("initdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    // Update personal information
    $actualizar = "UPDATE Pacientes SET Fecha_nacimiento=?, DNI_paciente=?, Telefono_paciente=?, Correo_paciente=? WHERE DNI_paciente=?";
    $updateStmt = $con->prepare($actualizar);
    $updateStmt->bind_param("sssss", $_POST['fecha'], $_POST['DNI'], $_POST['tel'], $_POST['correo'], $_SESSION['dni_usuario']);
    $updateStmt->execute();
    $updateStmt->close();

    // Handle photo upload
    if ($_FILES['foto']['error'] == 0) {
        $uploadDir = '/imagenes/';
        $uploadFile = $uploadDir . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $uploadFile);

        // Update the database with the new photo path
        $updatePhotoQuery = "UPDATE Pacientes SET Foto_usuario=? WHERE DNI_paciente=?";
        $updatePhotoStmt = $con->prepare($updatePhotoQuery);
        $newPhotoPath = $uploadFile;
        $updatePhotoStmt->bind_param("ss", $newPhotoPath, $_SESSION['dni_usuario']);
        $updatePhotoStmt->execute();
        $updatePhotoStmt->close();
    } header('Location: portal_paciente.php'); 
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
    echo "<input name='foto' type='file'><br>";
    echo "</div>";
    echo "<br>";
    echo "<button name='logout' class='boton_cerrar'>Cerrar Sesión</button>";
    echo "<button name='edit' class='boton_cerrar'>Editar Perfil</button><br>";
    echo "<h4>{$row['Nombre_paciente']} {$row['Primer_apellido_paciente']} {$row['Segundo_apellido_paciente']}</h4>";
    echo "<h5> Información Personal</h5>";
    echo "<label for='fecha'>Fecha de Nacimiento:</label>";
    echo "<input name='fecha' type='date' value='{$row['Fecha_nacimiento']}'><br>";
    echo "<h5>Información de Contacto:</h5>";
    echo "<label for='tel'>Teléfono:</label>";
    echo "<input name='tel' type='text' value='{$row['Telefono_paciente']}'><br>";
    echo "<label for='correo'>Correo:</label>";
    echo "<input name='correo' type='email' value='{$row['Correo_paciente']}'><br>";
    echo "<input type='submit' value='Guardar Cambios'>";
    echo "</form>";
    echo "</div>";
}

$stmt->close();
$con->close();
?>

<hr>
<div class="ingresos">