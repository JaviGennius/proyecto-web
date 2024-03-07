<?php $titulo="Cambio Contraseña";
$script = "<link rel='stylesheet' type='text/css' href='../css/cambio.css'>";
$estilos = "<script src='../js/cambio.js'></script>";
?>
<?php
session_start();
require("initdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    //Expresiones regulares (athento): https://soporte.athento.com/hc/es/articles/4406002654994-Ejemplos-de-expresiones-regulares-frecuentes#:~:text=Ejemplos%20de%20expresiones%20regulares%20frecuentes%201%20Texto%20con,sensibles%20en%20esta%20herramienta%29%3A%20https%3A%2F%2Fpythex.org%2F%20Otros%20patrones%3A%20https%3A%2F%2Fwww.html5pattern.com%2F 
    //Comprobaciones de que si no existe (php documentación): https://www.php.net/manual/es/function.isset.php
    if (!isset($_POST['dni']) || !isset($_POST['contrasena']) || !isset($_POST['contrasena_verific'])) {
        $error = "No se ha podido cambiar la contraseña correctamente";
    }
    //Mirar pregmatch (php documentación): https://www.php.net/manual/es/function.preg-match.php
    if (!preg_match('/^[0-9]{8}[A-Za-z]$/', $_POST['dni'])) {
        $error = "Formato de DNI incorrecto";
    }

    if (!preg_match('/^(?=.*\d)(?=.*[a-zA-Z]).{3,16}$/', $_POST['contrasena'])) {
        $error = "La contraseña debe tener al menos 3 caracteres y 16 máximo (Entre ellos 1 dígito y 3 letras)";
    }

    if ($_POST['contrasena_verific'] !== $_POST['contrasena']) {
        $error = "Las contraseñas deben coincidir";
    }

    if ($error == "") {
        $dni = $_POST['dni'];
        $contrasena = $_POST['contrasena'];

        $query = "UPDATE pacientes SET Cts_usuario = '$contrasena' WHERE DNI_paciente = '$dni'";
        $resultado = mysqli_query($con, $query);

        if ($resultado) {
            header('Location: /back-end/inicio_sesion.php');
            exit();
        } else {
            $error = "No se ha podido cambiar la contraseña";
        }
    }
}

mysqli_close($con);
?>

<?php require("_header.php")?>
<body>
    <a href="/back-end/inicio_sesion.php" id="cabecera"><img src="../imagenes/salud_contraseña.png" draggable="false" title="Volver Inicio Sesión Portal Paciente"/></a>
    <main class="container" id="container">
        <form id="formulario" method="post" action="/back-end/cambiocontrasena.php">
        <?php if ($error != "") {
                echo "<p class='error'>$error</p>";
            }?>
            <label for="dni" class="dnil">DNI<font color="red">*</font></label>
            <input type="text" id="dni" name="dni"  onblur="validarDNI()">
            <label for="contrasena" class="contrasenal">Contraseña<font color="red">*</font></label>
            <input type="password" id="contrasena" class="contrasena" name="contrasena"  onblur="validarContrasena()">
            <label for="contrasena_verific" class="verif_contrl " id="label_verif">Verificación de Contraseña<font color="red">*</font></label>
            <input type="password"class="verif_contr" id="contrasena_verific" name="contrasena_verific"  onblur="validarContrasenaVeficada()">
            <button type="submit" id="submitButton" onclick="validarFormulario()">Cambiar Contraseña</button>
        </form>
        <div class="cargador" id="cargar"></div>
    </main>
</body>
</html>

