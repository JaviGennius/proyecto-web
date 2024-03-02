<?php
    $estilos = "<link rel='stylesheet' href='../css/styles.css'>
    <link rel='stylesheet' href='../css/departamentos.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384'>";
    $script = "
    <script src='../js/flipimg.js'></script>
    <script src='https://kit.fontawesome.com/e3d46192fc.js' crossorigin='anonymous'></script>";

    require("initdb.php");
    $ID_departamento = $_GET['ID_departamento'];
    $consulta2 = "SELECT Nombre_servicio FROM servicios INNER JOIN departamentos ON departamentos.ID_departamento = servicios.ID_departamento WHERE departamentos.ID_departamento = ?;";
    $stmt = $con->prepare($consulta2);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result = $stmt->get_result(); 
    
    $consulta3 = "SELECT Descripcion_departamento FROM departamentos WHERE departamentos.ID_departamento = ?;";
    $stmt = $con->prepare($consulta3);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result2 = $stmt->get_result(); 
    
    $consulta5 = "SELECT * FROM sanitarios INNER JOIN departamentos ON departamentos.ID_departamento = sanitarios.ID_departamento WHERE departamentos.ID_departamento = ? ORDER BY Posicion_sanitario;";;
    $stmt = $con->prepare($consulta5);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result5 = $stmt->get_result(); 

    $ID_departamento = $_GET['ID_departamento'];
    $consulta4 = "SELECT Nombre_departamento FROM departamentos WHERE ID_departamento = ?;";
    $stmt = $con->prepare($consulta4);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result3 = $stmt->get_result(); 

    $departamentoData = $result3->fetch_assoc();
    $titulo = $departamentoData['Nombre_departamento'];

?>
<?php require("_header.php");?>
<header id="cabecera">
        <img src="../imagenes/hospital.png" class="image2"/>
        <h1>Departamento de <?php echo $departamentoData['Nombre_departamento']; ?></h1>
    </header>
    <?php require_once("_menu.php");?>

<main>
    <section class="descripcion">
        <h3 class="h3">Descripción</h3>
