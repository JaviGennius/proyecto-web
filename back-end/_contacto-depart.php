<?php require("initdb.php");
    $consulta = "SELECT Correo_Departamento, Telefono_Departamento FROM departamentos WHERE Nombre_departamento = $titulo;";
    $guardar = $con -> query($consulta);
?>
<div class="parrafos">
<?php
    echo "<p>Teléfono: " . $consulta['Telefono_Departamento'] . "</p>";
    echo "<p><a href='mailto:traumatologia@hospitalfelipeVI.com?subject=Traumatología&body='>Correo: " . $consulta['Correo_Departamento'] . "</a></p>";
?>    
        </div>
        </footer>
</body>
</html>