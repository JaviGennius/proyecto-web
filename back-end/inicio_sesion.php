<?php $titulo="Inicio de Sesión";
    require("_header-inicio_sesion.php");
?>
<div class="container">
        <form id="formulario" method="post" action="/back-end/inicio_sesion.php">
            <label for="dni" class="dnil">DNI<font color="red">*</font></label>
            <input type="text" id="dni" name="dni" class="dni" onblur="validarDNI()">
            <label for="contraseña" class="contrasenal">Contraseña<font color="red">*</font></label>
            <input type="password" id="contraseña" class="contrasena" name="contraseña" onblur="validarContrasena()">
            <p class="parrafo"> <a href="/back-end/cambiocontrasena.php">¿Has olvidado la contraseña?</a></p>
            <br>
            <button id="botonsubmit" type="submit" onclick="validarFormulario()">Acceder</button>
        </form>
    </div>
</body>
</html>
<?php
// Para validar
session_start();
require("initdb.php");

if (isset($_POST['dni']) && isset($_POST['contrasena'])) {
    $dni = $_POST['dni'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM pacientes WHERE DNI_paciente='$dni' AND Cts_usuario='$contrasena';";
    $result = $conn->query($query);
    if ($result) {
        if ($datos = $result->fetch_object()) {
            $_SESSION["dni"] = $datos->dni;
            header('Location: /back-end/portal_paciente.php');
            exit();
        } else {
            header('Location: /back-end/cambiocontrasena.php');
            exit();
        }
    } else {
        echo "Error in the query: " . $conn->error;
    }
 } //else {
//     echo "Campos vacíos";
// }
?>

