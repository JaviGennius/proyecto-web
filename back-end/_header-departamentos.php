<!DOCTYPE html>
<html>

<head>
<?php 
$ID_departamento = $_GET['ID_departamento'];
$consulta4 = "SELECT Nombre_departamento FROM departamentos WHERE ID_departamento = ?;";
$stmt = $con->prepare($consulta4);
$stmt->bind_param("i", $ID_departamento);
$stmt->execute();
$result3 = $stmt->get_result(); 

$departamentoData = $result3->fetch_assoc();
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $departamentoData['Nombre_departamento']; ?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/departamentos.css">
    <link rel="icon" type="image/png" href="../imagenes/madrid.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384">
    <script src="../js/flipimg.js"></script>
    <script src="https://kit.fontawesome.com/e3d46192fc.js" crossorigin="anonymous"></script>
</head>
<body>
<header id="cabecera">
        <img src="../imagenes/hospital.png" class="image2"/>
        <h1>Departamento de <?php echo $departamentoData['Nombre_departamento']; ?></h1>
    </header>
    <?php require_once("_menu.php");?>
</body>
</html>
