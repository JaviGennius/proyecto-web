<div class="ingresos">
    <h4>Ingresos:</h4>
            <?php 
            session_start();
            require("initdb.php");

            $consulta = "SELECT 
            Fecha_alta,
            Fecha_baja,
            Nombre_medicamento,	
            Nombre_tratamiento,
            Nombre_enfermedad,
            Nombre_Sanitario FROM ingresos 
            INNER JOIN medicamentos ON ingresos.ID_medicamento = medicamentos.ID_medicamento
            INNER JOIN enfermedades ON ingresos.ID_enfermedad = enfermedades.ID_enfermedad
            INNER JOIN tratamientos ON ingresos.ID_tratamiento = tratamientos.ID_Tratamiento
            INNER JOIN sanitarios ON ingresos.NIF_sanitario = sanitarios.NIF_sanitario
            WHERE DNI_paciente = ?;";

            $stmt = $con->prepare($consulta);

            $stmt->bind_param("s", $_SESSION['dni_usuario']);
            $stmt->execute();
             $result = $stmt->get_result();  // Fixed method name from fechObject() to get_result()

            while($row = $result->fetch_assoc()) { 
                echo "<li class='lista'> Ingreso: ";
                echo "<ul>";
                echo "<li> Fecha Alta: " . $row['Fecha_alta'] . "</li>";
                echo "<li>Fecha Baja: " . $row['Fecha_baja'] . "</li>";
                echo "<li> Motivo: " . $row['Nombre_enfermedad'] . "</li>";
                echo "<li>Medicación: " . $row['Nombre_medicamento'] . "</li>";
                echo "<li> Tratamiento: " . $row['Nombre_tratamiento'] . "</li>";
                echo "<li>Médico: " . $row['Nombre_Sanitario'] . "</li>";
                echo "</ul>";
                echo "</li>";
            } 
            $stmt->close();
            $con->close();
            ?>
        </div>
    </div>
<br>
</div>
</main>  