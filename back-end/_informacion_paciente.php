<?php session_start();
if(isset($_POST['logout'])) {
    session_destroy();
    header("Location: inicio_sesion.php");
    exit();
}
?>
<div class="carrusel">
            <?php 
                session_start();
                require("initdb.php");

                $consulta = "SELECT DNI_paciente, Num_Historial, Nombre_paciente, Primer_apellido_paciente, Segundo_apellido_paciente, Fecha_nacimiento, Sexo, Telefono_paciente, Correo_paciente,Foto_usuario FROM Pacientes WHERE DNI_paciente = ?";

                $stmt = $con->prepare($consulta);

                $stmt->bind_param("s", $_SESSION['dni_usuario']);
                $stmt->execute();
                $result = $stmt->get_result(); 
                while ($row = $result->fetch_assoc()) { 
                 echo "<div class='informacion'>";
                echo"<div>";
                echo "<img id='foto' src='" . $row['Foto_usuario'] . "' class='perfil' draggable='false'>";
                echo"</div>";
                echo"<br>";
                echo "<form method='post'>
                    <button name='logout' class='boton_cerrar'>Cerrar Sesión</button>
                    <button name='edit' class='boton_cerrar'>Editar Perfil</button>
                </form> ";
                echo "<br>";
                    echo "<h4>" . $row['Nombre_paciente'] . " " . $row['Primer_apellido_paciente'] . " " . $row['Segundo_apellido_paciente'] . "</h4>";
                    echo "<h5> Información Personal</h5>";
                        echo "<p> Fecha Nacimiento: " . $row['Fecha_nacimiento'] . "</p>";
                        echo "<p>DNI: " . $row['DNI_paciente'] . "</p>";
                        echo "<p> Número de Historial: " . $row['Num_Historial'] . "</p>";
                        echo "<p>Sexo: " . $row['Sexo'] . "</p>";
                    echo "<h5>Información de Contacto:</h5>";
                        echo "<p>Teléfono: " . $row['Telefono_paciente'] . "</p>";
                        echo "<p>Correo: " . $row['Correo_paciente'] . "</p>";
                }

                $stmt->close();
                $con->close();
                ?>
                <hr>
                    <?php require("_ingresos.php")?>