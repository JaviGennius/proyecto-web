<?php $titulo="Inicio de Sesión";
    require("_header-inicio_sesion.php");
?>
<div class="container">
        <form id="formulario" method="post" action="/back-end/inicio_sesion.php" onsubmit="enviar_formulario(event)">
            <label for="nombre_de_usuario" class="nombrel">Nombre de usuario<font color="red">*</font></label>
            <br>
            <input type="text" class="nombre" id="nombre_de_usuario" name="nombre_de_usuario" required onblur="validarCampo(this, /^[a-zA-Z\s]+$/, 'Nombre de usuario')">
            <br>
            <label for="dni" class="dnil">DNI<font color="red">*</font></label>
            <br>
            <input type="text" id="dni" name="dni" class="dni" pattern="[0-9]{8}[A-Za-z]" title="Introduce un DNI válido" required onblur="validarCampo(this, /^[0-9]{8}[A-Za-z]$/, 'DNI')">
            <br>
            <label for="contraseña" class="contrasenal">Contraseña<font color="red">*</font></label>
            <br>
            <input type="password" id="contraseña" class="contrasena" name="contraseña" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,16}$" title="Debe contener al menos 3 caracteres, incluyendo al menos un número, una letra minúscula y una letra mayúscula" required onblur="validarCampo(this, /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,16}$/, 'Contraseña')">
            <p class="parrafo"> <a href="/back-end/cambiocontrasena.php">¿Has olvidado la contraseña?</a></p>
            <br>
            <button type="submit">Acceder</button>
        </form>
    </div>
</body>
</html>
<?php
// Para validar
require("initdb.php");

if (!isset($_POST['dni']) || !isset($_POST['contrasena']) || !isset($_POST['contrasena_verific']) || $_POST['contrasena_verific'] !== $_POST['contrasena'] || $_POST['contrasena'] === "" || $_POST['contrasena_verific'] === "" ) {
    exit();
}

$dni = $_POST['dni'];
$contrasena = $_POST['contrasena'];

$query = "UPDATE pacientes SET Cts_usuario = '$contrasena' WHERE DNI_paciente = '$dni'";

$resultado = mysqli_query($con, $query);

if ($resultado) {

    header('Location: /back-end/portal_paciente.php');
    exit();
} else {
    header('Location: /back-end/cambiocontrasena.php');
    exit();
}

mysqli_close($con);
?>