<?php require("initdb.php");
    $consulta = "SELECT Correo_Departamento, Telefono_Departamento FROM departamentos WHERE Nombre_departamento = '$titulo';";
    $guardar = $con -> query($consulta);
?>
<div class="parrafos">
<?php
    while($row = $guardar->fetch_assoc()) {
    echo "<p>Teléfono: " . $row['Telefono_Departamento'] . "</p>";
    echo "<a href='mailto:" . $row['Correo_Departamento'] ."?subject=&body='><p>Correo: " . $row['Correo_Departamento'] . "</p></a>";
    }
?>
        </div>
        </footer>
</body>
</html>