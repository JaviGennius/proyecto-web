<?php
$titulo="Formulario del paciente";
$estilos= "<link rel='stylesheet' type='text/css' href='../css/formulario.css'>";?>


<?php require("_header.php"); ?>
<body>
  <header id="cabecera">
    <a href="/back-end/index.php"><img src="../imagenes/hospital.png" title="Inicio" class="image2" draggable="false"/></a>
    <h1>Formulario del Pacientes</h1>
  </header>
  <main>
    <form id="patientForm" method="post" action="../back-end/formulario_final.php" enctype="multipart/form-data">
      <fieldset>
        <label for="dni">DNI:<font color="red">*</font></label>
        <input type="text" id="dni" name="dni" placeholder="Introduzca DNI">
        <span class="errores" id="error_dni">Debes incluir tu DNI</span>
        <label for="nombre">Nombre:<font color="red">*</font></label>
        <input type="text" id="nombre" name="nombre" placeholder="Introduzca Nombre">
        <span class="errores" id="error_nombre">Debes incluir tu nombre</span>
        <br>
        <label for="primero">Primer Apellido:<font color="red">*</font></label>
        <input type="text" id="primero" name="primero" placeholder="Introduzca Primer Apellido">
        <span class="errores" id="error_apellido1">Debes incluir tu primer apellido</span>
        <br>
        <label for="segundo">Segundo Apellido:<font color="red">*</font></label>
        <input type="text" id="segundo" name="segundo" placeholder="Introduzca Segundo Apellido">
        <span class="errores" id="error_apellido2">Debes incluir tu segundo apellido</span>
        <br>
        <fieldset>
          <legend>Fecha de Nacimiento:</legend>
          <br>
          <label for="dia">Día:<font color="red">*</font></label>
          <select id="dia" name="dia">
            <option disabled></option>
            <option value="">Seleccione día...</option>
            <option disabled></option>
            <hr>
            <option disabled></option>
            <option value="01">1</option>
            <option value="02">2</option>
            <option value="03">3</option>
            <option value="04">4</option>
            <option value="05">5</option>
            <option value="06">6</option>
            <option value="07">7</option>
            <option value="08">8</option>
            <option value="09">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <label for="mes">Mes:<font color="red">*</font></label>
          <select id="mes" name="mes">
            <option disabled></option>
            <option value="">Seleccione mes...</option>
            <option disabled></option>
            <hr>
            <option disabled></option>
            <option value="01">enero</option>
            <option value="02">febrero</option>
            <option value="03">marzo</option>
            <option value="04">abril</option>
            <option value="05">mayo</option>
            <option value="06">junio</option>
            <option value="07">julio</option>
            <option value="08">agosto</option>
            <option value="09">septiembre</option>
            <option value="10">octubre</option>
            <option value="11">noviembre</option>
            <option value="12">diciembre</option>
          </select>
          <label for="ano">Año:<font color="red">*</font></label>
          <input type="number" placeholder="Seleccione año..." min="1950" max="2030" id="ano" name="ano">
          <span class="errores" id="error_edad">Debes incluir tu fecha de Nacimiento</span>
        </fieldset>
        <br>
        <label for="sexo">Sexo:<font color="red">*</font></label>
        <select name="sexo" id="sexo">
          <option disabled></option>
          <option value="">Seleccione sexo...</option>
          <option disabled></option>
          <hr>
          <option disabled></option>
          <option value="hombre">Hombre</option>
          <option value="mujer">Mujer</option>
          <option value="otro">Otro</option>
        </select>
        <span class="errores" id="error_sexo">Debes incluir tu sexo</span>
        <br>
        <label for="telefono">Teléfono:<font color="red">*</font></label>
        <input type="tel" id="telefono" name="telefono" placeholder="Introduzca Número de Teléfono">
        <span class="errores" id="error_tel">Debes incluir un telefono de contacto</span>
        <label for="email">Correo Electrónico:<font color="red">*</font></label>
        <input type="email" id="email" name="email" placeholder="Introduzca Correo Electrónico">
        <span class="error" id="emailError"></span>
        <span class="errores" id="error_email">Debes incluir un correo de contacto</span>
        <label for="enfermedades">Enfermedades Previas:</label>
        <textarea id="enfermedades" name="enfermedades" rows="4" placeholder="Introduzca sus enfermedades en caso de tenerlas"></textarea>
        <label for="contrasena">Contraseña:<font color="red">*</font></label>
        <input type="password" id="contrasena" name="contrasena" placeholder="Introduzca Contraseña">
        <span class="errores" id="error_contrasena">Debes incluir tu Contraseña</span>
        <label for="contrasena_verific" id="label_verif">Verificación de Contraseña:<font color="red">*</font></label>
        <input type="password" id="contrasena_verific" name="contrasena_verific" placeholder="Vuelva a introducir la contraseña">
        <span class="errores" id="error_contrasena_verificada">Debes rescribir la contraseña y que sea igual a la contraseña anterior</span>
        <br>
      </fieldset>
      <br>     
      <button type="submit" id="submitButton">Enviar</button>
    </form>
    <!--Sacado de Youtube: https://youtu.be/8nm9WPptL0c?si=XRXdnEUw17DXZX4L-->
    <div class="cargador" id="cargar"></div>
  </main>
  <script src="../js/formulario_final.js"></script>
</body>
</html>
<?php
session_start();
require("initdb.php");

if (!isset($_POST["dni"]) || !isset($_POST["nombre"]) || !isset($_POST["primero"]) || !isset($_POST["segundo"]) || !isset($_POST["dia"]) || !isset($_POST["mes"]) ||
    !isset($_POST["ano"]) || !isset($_POST["sexo"]) || !isset($_POST["telefono"]) || !isset($_POST["email"]) || !isset($_POST["contrasena"]) || !isset($_POST["contrasena_verific"])) {
    exit();
}

$resultado = $con->prepare("
    INSERT INTO Pacientes (
        DNI_paciente,
        Num_Historial,
        Nombre_paciente,
        Primer_apellido_paciente,
        Segundo_apellido_paciente,
        Fecha_nacimiento,
        Sexo,
        Telefono_paciente,
        Correo_paciente,
        Cts_usuario,
        Foto_usuario
    )  
    VALUES (?,?,?,?,?,?,?,?,?,?,?)     
");
$numeroHistorial = 5555;
$foto_usuario = "/imagenes/Persona2.jpg";
$fecha = $_POST["ano"] . "-" . $_POST["mes"] . "-" . $_POST["dia"];
$sexo = ucfirst($_POST["sexo"]);

$resultado->bind_param(
    "sisssssssss",
    $_POST["dni"],
    $numeroHistorial,
    $_POST["nombre"],
    $_POST["primero"],
    $_POST["segundo"],
    $fecha,
    $sexo,
    $_POST["telefono"],
    $_POST["email"],
    $_POST["contrasena"],
    $foto_usuario
);

$resultado->execute();

if ($resultado->affected_rows > 0) {
    //tutorial del inicio de sesion//
    $_SESSION["dni_usuario"] = $_POST["dni"];
    header("location: portal_paciente.php");
    exit();
} else {
    header("location: formulario_final.php");
    exit();
}

?>
