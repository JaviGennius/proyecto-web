<?php
session_start();
require("initdb.php");

$error = "";
//Metodo para validad los campos del formulario con POSR (Youtube): https://www.bing.com/videos/riverview/relatedvideo?&q=%24_SERVER%5b%22REQUEST_METHOD%22%5d+%3d%3d+%22POST%22)+php&&mid=C6C24A5BAB8D9CDC2509C6C24A5BAB8D9CDC2509&&FORM=VRDGAR
//Iniciar sesión: https://www.youtube.com/watch?v=VAUVAdQfPOw&t=756s
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['dni']) || !isset($_POST['contrasena'])) {
        $error = "No se puede iniciar sesión con este usuario";
    }

    $dni = $_POST['dni'];
    $contrasena = $_POST['contrasena'];

    if ($error == "") {
        $query = "SELECT * FROM pacientes WHERE DNI_paciente ='$dni';";
        //Creacion de mysqli_query (w3schools):https://www.bing.com/search?pglt=513&q=mysqli_query&cvid=dc8008eaf75c4d669d255b035c09783a&gs_lcrp=EgZjaHJvbWUqBggBEAAYQDIGCAAQRRg5MgYIARAAGEAyBggCEAAYQDIGCAMQABhAMgYIBBAAGEAyBggFEAAYQDIGCAYQABhAMgYIBxAAGEAyBggIEAAYQNIBCDY0ODVqMGoxqAIAsAIA&FORM=ANNTA1&pcmpc=PCMEDGEDP&PC=PCMEDGEDP
        $resultado = mysqli_query($con, $query);
        //Creacion del  array de los datos del usuario logueado (w3schools): https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp
        if ($datos = mysqli_fetch_object($resultado)) {
            if ($contrasena == $datos->Cts_usuario) {
                //Desclarar variable de sesión: https://www.bing.com/videos/riverview/relatedvideo?&q=crear+variable+de+sesion+php&&mid=C75FF73AC7D9F87EA6B0C75FF73AC7D9F87EA6B0&&FORM=VRDGAR
                $_SESSION["dni_usuario"] = $dni; 
                header('Location: /back-end/portal_paciente.php');
                exit();
            } else {
                //Mensaje de error para que en caso de que no exista el usuario o contraseña (Copilot): https://www.bing.com/search?pglt=513&q=mostrar+mensajes+de+error+con+variables+en+php&cvid=7e88a05e71b64325afb65bb4af776531&gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBCTEwNjE3ajBqMagCALACAA&FORM=ANSPA1&PC=PCMEDGEDP&showconv=1
                //Errores (Stack overflow): https://es.stackoverflow.com/questions/40196/c%C3%B3mo-mostrar-mensaje-de-error-debajo-de-cada-formulario-err%C3%B3neo-con-php
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
