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