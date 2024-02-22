<?php $titulo="Cambio Contraseña"
?>

<?php require("_header-cambiocontrasena.php")?>
<body>
    <a href="/back-end/inicio_sesion.php" id="cabecera"><img src="../imagenes/hospital.png" draggable="false" title="Volver Inicio Sesión Portal Paciente"/></a>
    <main class="container" id="container">
        <form id="formulario" method="post" action="/back-end/cambiocontrasena.php">
            <label for="dni" class="dnil">DNI<font color="red">*</font></label>
            <input type="text" id="dni" name="dni"  onblur="validarDNI()">
            <label for="contrasena" class="contrasenal">Contraseña<font color="red">*</font></label>
            <input type="password" id="contrasena" class="contrasena" name="contrasena"  onblur="validarContrasena()">
            <label for="contrasena_verific" class="verif_contrl " id="label_verif">Verificación de Contraseña<font color="red">*</font></label>
            <br>
            <input type="password"class="verif_contr" id="contrasena_verific" name="contrasena_verific"  onblur="validarContrasenaVeficada()">
            <button type="submit" id="submitButton" onclick="validarFormulario()">Enviar</button>
        </form>
        <div class="cargador" id="cargar"></div>
    </main>
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

