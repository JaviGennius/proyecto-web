<?php require("initdb.php");
    $consulta = "SELECT Nombre_departamento FROM departamentos;";
    $guardar = $con -> query($consulta);
?>
<body>
   
    <nav class="navegacion">
            <a href="../back-end/index.php"><img src="../imagenes/hospital 2.png" title="Inicio" class="hospital"/></a>
            <ul class="menu">
                <li><a href="../back-end/index.php">Inicio</a></li>
                <li><a href="#">Departamentos</a>
                    <ul class="sumenu">
                    <?php while($row = $guardar->fetch_assoc()) {
                            echo "<li><a href='../" . $row['Nombre_departamento'] . ".php'>" . $row['Nombre_departamento'] . "</li>";
                    } ?>
                    </ul>
                </li>
                <li><a href="#">Información</a>
                    <ul class="sumenu">
                        <li><a href="../back-end/calculadora.php">Calculadora</a></li>
                        <li><a href="../back-end/horarios.php">Horarios y Ubicación</a></li>
                        <li><a href="#">Imagenes del Centro</a></li>
                    </ul>
                </li>
                <li><a href="#">Portal del Paciente</a></li>
            </ul>
            <a href="#"><img src="../imagenes/boton_registro.png" class="boton_registro"/></a>
        </nav>
