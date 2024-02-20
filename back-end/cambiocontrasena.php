<?php
    require("initdb.php");

    if(!isset($_POST['dni'])) {
        exit();
    };

    if(!isset($_POST['contrasena'])) {
        exit();
    };
    if(!isset($_POST['contrasena_verific']) || $_POST['contrasena_verific'] === ['contrasena'] ) {
        exit();
    };

    $nombre = $_POST['dni'];
    $apellidos = $_POST['contrasena'];
    $dni = $_POST['contrasena_verific']; 

    $resultado = mysqli_prepare($conn, "UPDATE pacientes SET contrasena = ? WHERE DNI_paciente = ?;");

    mysqli_stmt_bind_param($consulta, "ss", $contrasena, $dni);

    mysqli_stmt_execute($consulta);

    if ($resultado){
        header('Location: /formulario2.php');
    }
    else{
        header('Location: /cambiocontrasena.php');
    }
    mysql_close($con);   
?>
<?php $titulo="Cambio Contraseña"?>
<?php require("_header-cambiocontrasena.php")?>
<body>
    <a href="../html/formulario2.html" id="cabecera"><img src="../imagenes/hospital.png" draggable="false" title="Volver Inicio Sesión Portal Paciente"/></a>
    <main class="container" id="container">
        <form id="formulario" method="post" enctype="multipart/form-data">
            <label for="dni" class="dnil">DNI<font color="red">*</font></label>
            <input type="text" id="dni" name="dni" onblur="validarDNI()">
            <label for="contrasena" class="contrasenal">Contraseña<font color="red">*</font></label>
            <input type="password" id="contrasena" class="contrasena" name="contrasena" onblur="validarContrasena()">
            <label for="contrasena_verific" class="verif_contrl " id="label_verif">Verificación de Contraseña<font color="red">*</font></label>
            <br>
            <input type="password"class="verif_contr" id="contrasena_verific" name="contrasena_verific" onblur="validarContrasenaVeficada()">
            <button type="button" id="submitButton" onclick="validarFormulario()">Enviar</button>
        </form>
        <div class="cargador" id="cargar"></div>
    </main>
</body>
</html>