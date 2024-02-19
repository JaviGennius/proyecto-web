<?php
    require("initdb.php");

    if(!isset($_POST['nombre'])) {
        echo "El nombre es obligatorio";
        exit();
    };

    if(!isset($_POST['apellidos'])) {
        echo "Los apellidos son obligatorio";
        exit();
    };
    if(!isset($_POST['dni']) || !preg_match('/^[0-9]{8}[a-zA-z]$$/', $_POST['dni'])) {
        echo "El formato del DNI es incorrecto";
        exit();
    };

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni']; 

    $resultado = mysqli_prepare($conn, "insert into Alumno VALUES (nombre, apellidos, DNI) VALUES (?,?,?);");

    mysqli_stmt_bind_param($consulta, "sss", $nombre, $apellidos, $dni);

    mysqli_stmt_execute($consulta);

    if ($resultado){
        header('Location: /login.php');
    }
    else{
        header('Location: /registro.php');
    }
    mysql_close($conn);   
?>