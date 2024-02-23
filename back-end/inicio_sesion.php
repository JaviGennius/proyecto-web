<?php $titulo="Inicio de Sesión";
    require("_header-inicio_sesion.php");
?>
<div class="container">
        <form id="formulario" method="post" action="/back-end/inicio_sesion.php">
            <label for="dni" class="dnil">DNI<font color="red">*</font></label>
            <input type="text" id="dni" name="dni" class="dni">
            <label for="contraseña" class="contrasenal">Contraseña<font color="red">*</font></label>
            <input type="password" id="contraseña" class="contrasena" name="contraseña">
            <p class="parrafo"> <a href="/back-end/cambiocontrasena.php">¿Has olvidado la contraseña?</a></p>
            <br>
            <button id="botonsubmit" type="submit">Acceder</button>
        </form>
    </div>
    <script src="../js/logica.js"></script>
</body>
</html>
<?php
// Para validar
session_start();
require("initdb.php");

if (isset($_POST['dni']) && isset($_POST['contrasena'])) {
    $dni = $_POST['dni'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM pacientes WHERE DNI_paciente=? AND Cts_usuario=?";
    $stmt = $con->prepare($query);
    
    // Bind parameters
    $stmt->bind_param("ss", $dni, $contrasena);

    // Execute the query
    $stmt->execute();

    // Bind the result variables
    $stmt->bind_result($resultDni, $resultCtsUsuario);

    // Fetch the result
    $stmt->fetch();

    // Close the statement
    $stmt->close();

    if ($resultDni) {
        $_SESSION["dni"] = $resultDni;
        header('Location: /back-end/portal_paciente.php');
        exit();
    } else {
        header('Location: /back-end/cambiocontrasena.php');
        exit();
    }
} else {
    exit();
}
?>

