<!DOCTYPE html>
<html>
<?php
    $titulo = 'Oncologia';
    $consulta4 = "SELECT Nombre_departamento FROM departamentos WHERE Nombre_departamento = '$titulo';";
    $guardar4 = $con -> query($consulta4);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet"href="../css/departamentos.css">
    <link rel="icon" type="image/png" href="../imagenes/madrid.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384">
    <script src="../js/flipimg.js"></script>
    <script src="https://kit.fontawesome.com/e3d46192fc.js" crossorigin="anonymous"></script>
</head>
<body>
<header id="cabecera">
        <img src="../imagenes/hospital.png" class="image2"/>
        <?php
            while($row4 = $guardar4->fetch_assoc()) {
                echo "<h1>Departamento de " . $row4['Nombre_departamento'] . "</h1>";
            };
        ?>
    </header>
    <?php require_once("_menu.php")?>

    