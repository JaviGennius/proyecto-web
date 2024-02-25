<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo?></title>
    <link rel="icon" type="image/png" href="../imagenes/madrid.png" />
    <link href="../css/calculadora.css" rel="stylesheet"/>
    <script src="../js/calculadora.js"></script>
</head>
<body>
<header>
        <img src="../imagenes/hospital.png" class="imagenhospital">
    </header>
    <?php
    session_start();
    if($_SESSION['dni_usuario']){
        require_once("_menu-cerrar.php");
        if(isset($_POST['logout'])) {
            session_destroy();
            header("Location: inicio_sesion.php");
            exit();
            }
        } else {
            
            require_once("_menu.php");
        }
?>