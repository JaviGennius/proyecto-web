<?php session_start();
require("initdb.php");
    $consulta = "SELECT DNI_paciente, Num_Historial, Nombre_paciente, Primer_apellido_paciente, Segundo_apellido_paciente, Fecha_nacimiento,Sexo,Telefono_paciente,Correo_paciente FROM Pacientes WHERE DNI_paciente = '$_SESSION[dni]';";
    $guardar = $con -> query($consulta);
?>
<div class="carrusel">
        <div class="informacion">
            <div>
    <!--La url del tutorial que bsuqué para hacer el script de cambio de imagenes ocn un botón: https://www.lawebdelprogramador.com/foros/JavaScript/1491641-cambiar-imagen-al-pusar-sobre-un-boton.html-->        
                <img id="foto" src="../imagenes/delante.png"  onclick="cambioImagen()" class="perfil" draggable="false">
            </div>
            <?php while($row = $guardar->fetch_assoc()) { 
                            echo "<h4>" . $row['Nombre_paciente'] . " " .$row['Primer_apellido_paciente'] . " " . $row['Segundo_apellido_paciente'] . "</h4>";
                            echo "<h5> Información Personal</h5>";
                            echo "<p> Fecha Nacimiento: " . $row['Fecha_nacimiento'] . "</p>";
                            echo "<p>DNI: " . $row['DNI_paciente'] . "</p>";
                            echo "<p> Número de Historial: " . $row['Num_Historial'] . "</p>";
                            echo "<p>Sexo: " . $row['Sexo'] . "</p>";
                            echo "<h5>Información de Contacto:</h5>";
                            echo "<p>Teléfono: " . $row['Telefono_paciente'] . "</p>";
                            echo "<p>Correo: " . $row['Correo_paciente'] . "</p>";
                            
                    } ?>
                    <hr>
                    <?php require("_ingresos.php")?>