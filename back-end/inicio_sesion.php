<?php $titulo="Inicio de Sesión";
    require("_header-inicio_sesion.php");
?>
<div class="container">
        <form id="formulario" method="post" action="/back-end/inicio_sesion.php">
            <label for="dni" class="dnil">DNI<font color="red">*</font></label>
            <input type="text" id="dni" name="dni" class="dni">
            <label for="contraseña" class="contrasenal">Contraseña<font color="red">*</font></label>
            <input type="password" id="contraseña" class="contrasena" name="contrasena">
            <p class="parrafo"> <a href="/back-end/cambiocontrasena.php">¿Has olvidado la contraseña?</a></p>
            <br>
            <button id="botonsubmit" name="botonsubmit" type="submit">Acceder</button>
        </form>
    </div>
    <script src="../js/logica.js"></script>
</body>
</html>
<?php
session_start();
require("initdb.php");

if (!isset($_POST['dni']) || !isset($_POST['contrasena'])) {
    exit();
}

$dni = $_POST['dni'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM pacientes WHERE DNI_paciente ='$dni' AND Cts_usuario='$passwd';";

$resultado = mysqli_query($con, $query);

if ($resultado) {
    $_SESSION["dni_usuario"] = $dni; 
    header('Location: /back-end/portal_paciente.php');
    exit();
} else {
    header('Location: /back-end/inicio_sesion.php');
    exit();
}

mysqli_close($con);
?>
