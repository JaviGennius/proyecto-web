<?php
require("initdb.php");


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
    Correo_paciente)  
    VALUES (?,?,?,?,?,?,?,?,?)     
    ");

$numeroHistorial= 5555;
$fecha = date("Y-m-d");
$sexo =ucfirst($_POST["sexo"]);
$resultado->bind_param(
    "sisssssis",
    $_POST["dni"],
    $numeroHistorial,
    $_POST["nombre"], 
    $_POST["primero"],
    $_POST["segundo"],
    $fecha,
    $sexo,
    $_POST["telefono"],
    $_POST["email"],
);

$resultado->execute();
var_dump($resultado->num_rows());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
    <link rel="icon" type="image/png" href="../imagenes/madrid.png"/>
    <title>Formulario del Paciente</title>
</head>
<body>
  <header id="cabecera">
    <a href="../index.html"><img src="../imagenes/hospital.png" title="Inicio" class="image2" draggable="false"/></a>
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
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
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
            <option value="enero">enero</option>
            <option value="febrero">febrero</option>
            <option value="marzo">marzo</option>
            <option value="abril">abril</option>
            <option value="mayo">mayo</option>
            <option value="junio">junio</option>
            <option value="julio">julio</option>
            <option value="agosto">agosto</option>
            <option value="septiembre">septiembre</option>
            <option value="octubre">octubre</option>
            <option value="noviembre">noviembre</option>
            <option value="diciembre">diciembre</option>
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
      <button type="button" id="submitButton">Enviar</button>
    </form>
    <!--Sacado de Youtube: https://youtu.be/8nm9WPptL0c?si=XRXdnEUw17DXZX4L-->
    <div class="cargador" id="cargar"></div>
  </main>
  
  <script src="../js/formulario_final.js"></script>
</body>
</html>





