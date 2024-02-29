<?php require("initdb.php");
    $ID_departamento = $_GET['ID_departamento'];
    $consulta2 = "SELECT Nombre_servicio FROM servicios INNER JOIN departamentos ON departamentos.ID_departamento = servicios.ID_departamento WHERE departamentos.ID_departamento = ?;";
    $stmt = $con->prepare($consulta2);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result = $stmt->get_result(); 
    
    $consulta3 = "SELECT Descripcion_departamento FROM departamentos WHERE ID_departamento = ?;";
    $stmt = $con->prepare($consulta3);
    $stmt->bind_param("i", $ID_departamento);
    $stmt->execute();
    $result2 = $stmt->get_result(); 
    
    $consulta5 = "SELECT * FROM sanitarios INNER JOIN departamentos ON departamentos.ID_departamento = sanitarios.ID_departamento WHERE Nombre_departamento = '$titulo';";
    $guardar5 = $con -> query($consulta5);
?>
<?php require("_header-departamentos.php");?>
<main>
    <section class="descripcion">
        <h3 class="h3">Descripción</h3>
        <?php
            while($row3 = $result2->fetch_assoc()) {
                echo "<p>" . $row3['Descripcion_departamento'] . "</p>";
            }
        ?>
    </section>

    <section class="servicios">
        <h3 class="h3">Servicios</h3>
        <ul>
            <?php
                while($row2 = $result->fetch_assoc()) {
                    echo "<li>" . $row2['Nombre_servicio'] . "</li>";
                }
            ?>
        </ul>
    </section>
    <details open class="chatbotrobot">
        <summary><img src="../imagenes/CBOT.png" class="imagenchatbot" onclick="openchatbot()"/></summary>
        <div class="chatbot" id="chat-contenedor">
            <div id="chat-mensaje"></div>
            <input type="text" id="usuario-input" placeholder="Escribe un mensaje...">
            <button id="boton-enviar" onclick="sendMessage()">Enviar</button>
        </div>
    </details>
    <h3 class="h3">Nuestros profesionales</h3>
    <div class="cardiologos">
        <div class="c1">
            <img src="../imagenes/doctor_1.jpg" draggable="false" onmouseover="flip10()" onmouseout="flipout10()" id="neurologo1"/>
            <p>Dr. Fran Gonzalez</td><br>Trastornos neurológicos</p>

        </div>
        <div class="c2">
            <img src="../imagenes/doctor_2.jpeg" draggable="false" onmouseover="flip11()" onmouseout="flipout11()" id="neurologo2">
            <p>Dr. Fernando Alonso<br>Accidentes cerebrovasculares</p>
        </div>
        <div class="c3">
            <img src="../imagenes/doctor_3.jpeg" draggable="false" onmouseover="flip23()" onmouseout="flipout23()" id="neurologo4">
            <p>Dr. Antonio Herrero <br>Neurología general</p>
        </div>
        <div class="c4">
            <img src="../imagenes/c9.jpg" draggable="false" onmouseover="flip24()" onmouseout="flipout24()" id="neurologo5">
            <p>Dra. Ana Sánchez<br>Epilepsia</p>
        </div>
        <div class="c5">
            <img src="../imagenes/c7.jpg" draggable="false" onmouseover="flip25()" onmouseout="flipout25()" id="neurologo6">
            <p>Dr. Carlos Rodríguez<br>Demencia</p>
        </div>
        <div class="c6"> 
            <img src="../imagenes/c10.jpg" draggable="false" onmouseover="flip12()" onmouseout="flipout12()" id="neurologo3">
            <p>Dra. Carla Fernández<br>Parkinson</p>
        </div>
    </div>
    <br><br>
</main>
<script src="../js/chatb.js"></script>
<?php 
    require("_footer.php");
    require("_contacto-depart.php");
?>