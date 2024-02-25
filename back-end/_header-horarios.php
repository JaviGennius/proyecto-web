<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="icon" type="image/png" href="../imagenes/madrid.png"/>
    <link rel="stylesheet" href="../css/styles.css"/>
    <link rel="stylesheet" href="../css/ubicacion.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384">
    <script src="https://kit.fontawesome.com/e3d46192fc.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <img src="../imagenes/hospital.png" class="imagenhospital" draggable="false">
        <h1>Horarios y Ubicación del Hospital Felipe VI</h1>
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