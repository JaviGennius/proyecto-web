<?php require("initdb.php");
    $consulta = "SELECT Correo_Departamento, Telefono_Departamento FROM departamentos WHERE departamentos.ID_departamento = ?;";
    $ID_departamento = $_GET['ID_departamento'];
    $stmt = $con->prepare($consulta);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result4 = $stmt->get_result(); 
?>
<div class="parrafos">
<?php
    while($row = $result4->fetch_assoc()) {
    echo "<p>Teléfono: " . $row['Telefono_Departamento'] . "</p>";
    echo "<a href='mailto:" . $row['Correo_Departamento'] ."?subject=&body='><p>Correo: " . $row['Correo_Departamento'] . "</p></a>";
    }
?>
        </div>
        </footer>
</body>
</html>