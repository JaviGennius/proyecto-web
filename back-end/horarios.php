<?php $titulo="Ubicación y Horarios"?>
<?php require("initdb.php");
    $consulta3 = "SELECT Nombre_departamento, Horario FROM Departamentos;";
    $consulta2 = "SELECT Nombre_departamento, Sala_1, Sala_2, Sala_3 FROM Departamentos INNER JOIN Salas ON Salas.ID_departamento = Departamentos.ID_departamento;";
    $guardar2 = $con -> query($consulta2);
    $guardar3 = $con -> query($consulta3);
    $clase = 'dp2';
    $clase2 = 'dp2';
?>
<?php require("_header-horarios.php") ?> 
<main>
        <div>
            <h1>Bienvenido al apartado de horarios y ubicación del Hospital Felipe VI.</h1>
            <h2>En el hospital Felipe VI tratamos con diferentes horarios para cada departamento presente en nuestro centro:</h2>
        </div>
        <div class="tablas">
            <table>
                <thead>
                    <tr class="dp2">
                        <td>Departamento</td>
                        <td>De Lunes a Viernes</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $guardar3->fetch_assoc()) { 
                        if ($clase === 'dp2'){
                            $clase = 'dp1'; 
                        } else {
                            $clase = 'dp2';
                        };
                        echo "<tr class='$clase'>";
                            echo "<td>" . $row['Nombre_departamento'] . "</td>";
                            echo "<td>" . $row['Horario'] . "</td>";
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr class="dp2">
                        <td>Departamento</td>
                        <td colspan="3">Salas</td>
                    </tr>
                </thead>
                <tbody>
                <?php while($row2 = $guardar2->fetch_assoc()) { 
                        $clase2 = ($clase2 === 'dp2') ? 'dp1' : 'dp2';
                        
                        echo "<tr class='$clase2'>";
                            echo "<td>" . $row2['Nombre_departamento'] . "</td>";
                            echo "<td>" . $row2['Sala_1'] . "</td>";
                            echo "<td>" . $row2['Sala_2'] . "</td>";
                            echo "<td>" . $row2['Sala_3'] . "</td>";
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>
        </div>
        </div>
        
            <h2>Ubicación</h2>
            <h3>
                La elección estratégica de la ubicación del Hospital Felipe VI se basa en su accesibilidad inigualable, con conexiones eficientes de transporte público y amplio estacionamiento. 
                Además, su entorno tranquilo y seguro, cerca de puntos de referencia clave, crea un ambiente propicio para la atención médica de calidad. 
                Esta ubicación céntrica refleja nuestro compromiso de ser accesibles y convenientes para la comunidad que servimos.
            </h3>
        <div class="cartas">
            <div class="contorno1">
            <div class="carta">
                <div class="medio">
                <div class="cara1"></div>
                <div class="cara2">
                    <h4>Dirección:</h4>
                    <p>Avenida de Fernando Alonso, 8<br>
                    Alcobendas (Madrid)<br>
                    CP 28108, España</p>
                </div>
            </div>
            </div>
        </div>
            <div class="contorno2">
                <div class="carta">
                    <div class="medio">
                    <div class="cara1" style="background-image: url(../imagenes/llegar.jpg);" draggable="false"></div>
                    <div class="cara2">
                        <h4>Cómo Llegar:</h4>
                        <p>El hospital cuenta con excelentes conexiones de transporte público, con paradas de autobús y estaciones de metro cercanas. 
                            Además, ofrecemos amplio estacionamiento para pacientes y visitantes, facilitando la llegada en vehículo propio.</p>
                    </div>
                </div>
                </div>
                </div>
                <div class="contorno3">
                    <div class="carta">
                        <div class="medio">
                        <div class="cara1" style="background-image: url(../imagenes/ubicacion.jpeg);" draggable="false"></div>
                        <div class="cara2">
                            <h4>Referencias Cercanas:</h4>
                            <p>Nos encontramos a pocos minutos de distancia de importantes puntos de referencia, como Barajas (Aeropuerto) y San Sebastián de los Reyes. 
                                Esto facilita la ubicación del hospital para aquellos que no están familiarizados con la zona.</p>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="contorno4">
                        <div class="carta">
                            <div class="medio">
                            <div class="cara1" style="background-image: url(../imagenes/hosptial.jpg);" draggable="false"></div>
                            <div class="cara2">
                                <h4>Entorno y Accesibilidad:</h4>
                                <p> La ubicación del hospital se caracteriza por su entorno tranquilo y seguro, contribuyendo a un ambiente propicio para la recuperación. 
                                    Además, nuestras instalaciones están diseñadas para ser accesibles para personas con movilidad reducida, garantizando la comodidad de todos nuestros pacientes.</p>
                            </div>
                        </div>
                        </div>
                        </div>  
        </div>
    </div>
    <div class="mapa">
    <h3>Mapa de Ubicación</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4029.9747791352543!2d-3.6153032705204344!3d40.53229181586673!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422da995a9e6ab%3A0x3dd2d61b103821da!2sUniversidad%20Europea%20de%20Madrid%20(Campus%20de%20Alcobendas)!5e0!3m2!1ses!2ses!4v1666594290396!5m2!1ses!2ses"></iframe>
    </div>
    </main>
<?php 
    require("_footer.php");
    require("_contacto-hospital.php");
?>