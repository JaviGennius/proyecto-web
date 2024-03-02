<?php
session_start();
require("initdb.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['dni']) || !isset($_POST['contrasena'])) {
        $error = "No se puede iniciar sesión con este usuario";
    }

    $dni = $_POST['dni'];
    $contrasena = $_POST['contrasena'];

    if ($error == "") {
        $query = "SELECT * FROM pacientes WHERE DNI_paciente ='$dni';";
        $resultado = mysqli_query($con, $query);

        if ($datos = mysqli_fetch_object($resultado)) {
            if ($contrasena == $datos->Cts_usuario) {
                $_SESSION["dni_usuario"] = $dni; 
                header('Location: /back-end/portal_paciente.php');
                exit();
            } else {
                $error = "La contraseña es incorrecta";
            }
        } else {
            $error = "El usuario no existe";
        }
    }
}

mysqli_close($con);
?>

<?php 
$titulo="Inicio de Sesión";
$estilos = "<link rel='stylesheet' type='text/css' href='../css/formulario2.css'>";

require("_header.php");
?>
<body>
    <a href="/back-end/index.php"><img src="../imagenes/salud.png" draggable="false" title="Inicio"/></a>
    <div class="container">
        <form id="formulario" method="post" action="/back-end/inicio_sesion.php">
            <?php if ($error != "") {
                echo "<p class='error'>$error</p>";
            }?>
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
